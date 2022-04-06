
@if ($showTable)
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="header-title">List of students</h4>
                    <div class="input-group inline" style="width: 350px">
                        <input type="text" id="searchBox" onkeyup="searchStudent()" class="form-control" style="display: inline-block" placeholder="Search by student ID">
                        <button class="btn btn-secondary btn-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead>
                        <th class="col-2">ID</th>
                        <th class="col-4">Name</th>
                        <th class="col-4">Department</th>
                        <th class="col-2">Session</th>
                    </thead>
                </table>
                <div style="height: 80vh; overflow: scroll">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($students as $student)
                            <tr style="cursor: pointer" wire:click = "showStudent({{$student->student_id}})"> 
                                <td class="col-2 student_id">{{$student->student_id}}</td>
                                <td class="col-4">{{$student->student_name}}</td>
                                <td class="col-4">{{$student->department}}</td>
                                <td class="col-2">{{$student->session}}</td>
                            </tr>
                            @endforeach
                            <tr style="display:none;" id="noresults"> 
                                <td>(no listings that start with "<span id="qt"></span>")</td> 
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
    </div>
@else
    <div class="row mt-3">
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
                  <button class="btn btn-secondary btn-sm" wire:click="back">back</button>
                  <button wire:click="deallocate({{$student}})" class="btn btn-warning btn-sm">Deallocate Sit</button>
                  <button wire:click="delete({{$student}})" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
    @endif
</div>


<script>
    function searchStudent(){
        let filter = document.getElementById('searchBox').value;
        let student_ids = document.querySelectorAll('.student_id');

        student_ids.forEach(id => {
            check = id.innerHTML.toLowerCase();
            if (check.indexOf(filter.toLowerCase())>-1) {
                id.parentNode.style.display = '';
            }
            else{
                id.parentNode.style.display = 'none';
            }
        });
    }

    window.addEventListener('student-updated', event => {
        swal('Success', 'student is updated', 'success');
    })

    window.addEventListener('student-saved', event => {
        swal('Success', 'student saved', 'success');
    })

    window.addEventListener('confirm-delete', event => {
        swal({
            title: "student will be deactivated?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                Livewire.emit('deleteConfirmed');
            }
        });

    })

    window.addEventListener('student-deactivated', event => {
        swal('Success', 'student is deactivated', 'success');
    })

    window.addEventListener('payment_received', event => {
      swal('Success', 'Payment received', 'success');
  })
</script>


<style>
    
table tr td, table th{
	padding: 4px !important;
}
</style>