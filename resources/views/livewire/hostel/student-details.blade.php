<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body p-4">
              <h2>Student Details</h2>
              <div class="row">
                  <div class="col-md-6">
                    <table class="table table-stripped">
                        <tr>
                            <th>Name</th>
                            <td>:</td>
                            <td>{{$student->student_name}}</td>
                        </tr>
                        <tr>
                            <th>Student ID </th>
                            <td>:</td>
                            <td>{{$student->student_id}}</td>
                        </tr>
                        <tr>
                            <th>Department </th>
                            <td>:</td>
                            <td>{{$student->department}}</td>
                        </tr>
                        <tr>
                            <th>Session </th>
                            <td>:</td>
                            <td>{{$student->session}}</td>
                        </tr>
                        <tr>
                            <th>Semester </th>
                            <td>:</td>
                            <td>{{$student->semester}}</td>
                        </tr>
                        
                    </table>
                  </div>
                  <div class="col-md-6">
                    <table class="table table-stripped">
                        <tr>
                            <th>Hostel Name</th>
                            <td>:</td>
                            <td>{{$student->hostel_name}}</td>
                        </tr> 
                        <tr>
                            <th>Room No.</th>
                            <td>:</td>
                            <td>{{$student->room_no}}</td>
                        </tr>  
                        <tr>
                            <th>Sit No.</th>
                            <td>:</td>
                            <td>{{$student->sit_no}}</td>
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
                                <button wire:click.prevent= "paymentReceive({{$payment->id}})" class="btn btn-primary btn-sm" @if ($payment->status=="Paid")
                                    disabled
                                @endif>Receive</button>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
              <button wire:click="delete({{$student}})" class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('payment-received', event => {
      swal('Success', 'Payment received', 'success');
  })
</script>