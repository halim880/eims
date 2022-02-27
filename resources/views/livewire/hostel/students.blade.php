
<div class="row mt-3">
    @if ($showTable)
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">List of students</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    {{-- <th>SI</th> --}}
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>Semester</th>
                                    <th>Session</th>
                                    <th>Room No.</th>
                                    <th>Sit No.</th>
                                    <th></th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    {{-- <td>{{$loop->index+1}}</td> --}}
                                    <td>{{$student->student->name}}</td>
                                    <td>{{$student->student_id}}</td>
                                    <td>{{$student->student->department->short_form}}</td>
                                    <td>{{$student->student->semester->short_form}}</td>
                                    <td>{{$student->student->session}}</td>
                                    <td>{{$student->room_no}}</td>
                                    <td>{{$student->sit_no}}</td>
                                    <td>
                                        <a href="{{route('hostel.student.show', $student)}}" class="btn btn-primary btn-sm">Details</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                                           
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>        
    @else
    <div class="col-md-10">
        <div class="card">
            <div class="card-body p-4">
              <h2>student Details</h2>
              <table class="table table-stripped">
                  <tr>
                      <th>student Name</th>
                      <td>:</td>
                      <td>{{$student->name}}</td>
                  </tr>
                  <tr>
                      <th>student phone</th>
                      <td>:</td>
                      <td>{{$student->student_phone}}</td>
                  </tr>
                  <tr>
                      <th>student Email</th>
                      <td>:</td>
                      <td>{{$student->student_email}}</td>
                  </tr>
                  <tr>
                      <th>Package </th>
                      <td>:</td>
                      <td>{{$student->getCurrentPackageName()}}</td>
                  </tr>
                  <tr>
                      <th>Plan </th>
                      <td>:</td>
                      <td>{{$student->getCurrentPlanName()}}</td>
                  </tr>
                  <tr>
                      <th>Payment Status </th>
                      <td>:</td>
                      <td>{{$student->getPaymentStatus()}}</td>
                  </tr>
                  <tr>
                      <th>Expire Date </th>
                      <td>:</td>
                      <td>{{$student->subscription->expireDate($xDate)}}</td>
                  </tr>
                  <tr>
                      <th>Remaining Days </th>
                      <td>:</td>
                      <td>{{$student->subscription->remainingDays($xDate)}}</td>
                  </tr>
              </table>
              <h2>student Admin details</h2>
              <table class="table table-stripped">
                  <tr>
                      <th>Admin Name</th>
                      <td>:</td>
                      <td>{{$admin->getFullName()}}</td>
                  </tr>
                  <tr>
                      <th>Email</th>
                      <td>:</td>
                      <td>{{$admin->email}}</td>
                  </tr>
              </table>
              <button wire:click="confirmDeactive({{$student}})" class="btn btn-danger btn-sm">Delete student</button>
            </div>
        </div>
    </div>
    
    @endif
</div>


<script>


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
</script>
