<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body p-4">
              <h2>Hostel Details</h2>
              <div class="row">
                  <div class="col-md-6">
                    <table class="table table-stripped">
                        <tr>
                            <th>Hostel Name</th>
                            <td>:</td>
                            <td>{{$hostelDetails->hostel_name}}</td>
                        </tr> 
                        <tr>
                            <th>Room No.</th>
                            <td>:</td>
                            <td>{{$hostelDetails->room_no}}</td>
                        </tr>  
                        <tr>
                            <th>Sit No.</th>
                            <td>:</td>
                            <td>{{$hostelDetails->sit_no}}</td>
                        </tr>                        
                    </table>
                  </div>
              </div>
              <h2>Payment details</h2>
              <table class="table table-stripped">
                  <thead>
                      <th>Semester</th>
                      <th>amount</th>
                      <th>Status</th>
                      <th>Action</th>
                  </thead>
                  <tbody>

                      @foreach ($payments as $payment)
                        <tr>
                            <td>{{$payment->semester}}</td> 
                            <td>{{$payment->amount}}</td>
                            <td>{{$payment->status}}</td>
                            <td>
                                <button id="bKash_button">Pay With bKash</button>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('payment-received', event => {
      swal('Success', 'Payment received', 'success');
  })

  $(decoment).ready(function (){

  });
</script>

<style>
    table tr td, table th{
        padding: 5px !important;
    }
</style>



<script type="text/javascript">
 
    var accessToken='';
    $(document).ready(function(){
        $.ajax({
            url: "token.php",
            type: 'POST',
            contentType: 'application/json',
            success: function (data) {
                console.log('got data from token  ..');
				console.log(JSON.stringify(data));
				
                accessToken=JSON.stringify(data);
            },
			error: function(){
						console.log('error');
                        
            }
        });

        var paymentConfig={
            createCheckoutURL:"createpayment.php",
            executeCheckoutURL:"executepayment.php",
        };

		
        var paymentRequest;
        paymentRequest = { amount:'105',intent:'sale'};
		console.log(JSON.stringify(paymentRequest));

        bKash.init({
            paymentMode: 'checkout',
            paymentRequest: paymentRequest,
            createRequest: function(request){
                console.log('=> createRequest (request) :: ');
                console.log(request);
                
                $.ajax({
                    url: paymentConfig.createCheckoutURL+"?amount="+paymentRequest.amount,
                    type:'GET',
                    contentType: 'application/json',
                    success: function(data) {
                        console.log('got data from create  ..');
                        console.log('data ::=>');
                        console.log(JSON.stringify(data));
                        
                        var obj = JSON.parse(data);
                        
                        if(data && obj.paymentID != null){
                            paymentID = obj.paymentID;
                            bKash.create().onSuccess(obj);
                        }
                        else {
							console.log('error');
                            bKash.create().onError();
                        }
                    },
                    error: function(){
						console.log('error');
                        bKash.create().onError();
                    }
                });
            },
            
            executeRequestOnAuthorization: function(){
                console.log('=> executeRequestOnAuthorization');
                $.ajax({
                    url: paymentConfig.executeCheckoutURL+"?paymentID="+paymentID,
                    type: 'GET',
                    contentType:'application/json',
                    success: function(data){
                        console.log('got data from execute  ..');
                        console.log('data ::=>');
                        console.log(JSON.stringify(data));
                        
                        data = JSON.parse(data);
                        if(data && data.paymentID != null){
                            alert('[SUCCESS] data : ' + JSON.stringify(data));
                            window.location.href = "success.html";                              
                        }
                        else {
                            bKash.execute().onError();
                        }
                    },
                    error: function(){
                        bKash.execute().onError();
                    }
                });
            }
        });
        
		console.log("Right after init ");
    });
	
	function callReconfigure(val){
        bKash.reconfigure(val);
    }

    function clickPayButton(){
        $("#bKash_button").trigger('click');
    }


</script>