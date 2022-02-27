<div class="row">
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
                  </thead>
                  <tbody>

                      @foreach ($payments as $payment)
                        <tr>
                            <td>{{$payment->semester}}</td> 
                            <td>{{$payment->amount}}</td>
                            <td>{{$payment->status}}</td>
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
</script>