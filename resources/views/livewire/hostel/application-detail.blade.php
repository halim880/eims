<div class="row mt-3">
    @if(!$showAllotForm)
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Applicant Details</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Student Name</th>
                            <th>:</th>
                            <td>{{$application["student_name"]}}</td>
                        </tr>
                        <tr>
                            <th>Student ID</th>
                            <th>:</th>
                            <td>{{$application["student_id"]}}</td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <th>:</th>
                            <td>{{$application["department"]}}</td>
                        </tr>
                        <tr>
                            <th>Session</th>
                            <th>:</th>
                            <td>{{$application["session"]}}</td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <th>:</th>
                            <td>{{$application["semester"]}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <th>:</th>
                            <td>{{$application["phone"]}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <td>{{$application["email"]}}</td>
                        </tr>
                        <tr>
                            <th>Current Address</th>
                            <th>:</th>
                            <td>{{$application["current_address"]}}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <th>:</th>
                            <td>{{$application["permanent_address"]}}</td>
                        </tr>
                    </table>
                    <div class="row">
                        <h3>Financial Status</h3>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Father name</th>
                                    <th>:</th>
                                    <td>{{$application["father_name"]}}</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <th>:</th>
                                    <td>{{$application["father_occupation"]}}</td>
                                </tr>
                                <tr>
                                    <th>Yearly Income</th>
                                    <th>:</th>
                                    <td>{{$application["father_yearly_income"]}}</td>
                                </tr>
                                <tr>
                                    <th>Total Family Member</th>
                                    <th>:</th>
                                    <td>{{$application["total_family_member"]}}</td>
                                </tr>
                                <tr>
                                    <th>Family income (Yearly)</th>
                                    <th>:</th>
                                    <td>{{$application["yearly_family_income"]}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Mother name</th>
                                    <th>:</th>
                                    <td>{{$application["mother_name"]}}</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <th>:</th>
                                    <td>{{$application["mother_occupation"]}}</td>
                                </tr>
                                <tr>
                                    <th>Yearly Income</th>
                                    <th>:</th>
                                    <td>{{$application["mother_yearly_income"]}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="card-footer">
                    <button wire:click.prevent="showForm" class="btn btn-primary btn-sm" @if ($alloted || $rejected)
                        disabled
                    @endif>Allot Sit</button>
                    <button wire:click.prevent="reject" class="btn btn-danger btn-sm" @if ($alloted || $rejected)
                    disabled
                @endif>Reject</button>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-6">
            <div class="row">
                <div>
                    <div class="card">
                        <div class="card-body p-2">
                          <form wire:submit.prevent="allotSit">
                            <h2>Allot Sit For {{$application['student_name']}}</h2>
              
                            <div class="form-group mb-1">
                              <label for="semester_id">Semester</label>
                              <select wire:model.defer = "semester_id" id="semester_id" class="form-control">
                                  @foreach ($semesters as $semester)
                                      <option value="{{$semester->id}}">{{$semester->name}}</option>
                                  @endforeach
                              </select>
                            </div>
              
                            <div class="form-group mb-1">
                              <label for="room_no">Room No.</label>
                              <input wire:model.defer = "room_no" type="number" class="form-control" required>
                              @error('room_no') <span class="error" style="color: red">{{ $message }}</span> @enderror
                            </div>
              
                            <div class="form-group mb-1">
                              <label for="sit_no">Sit No.</label>
                              <input wire:model.defer = "sit_no" type="number" class="form-control" required>
                            </div>
              
                              <div class="d-flex my-2">
                                  <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    @endif
</div>

<script>
    window.addEventListener('application_approved', event => {
        swal('Success', 'Application Aproved', 'success');
    })

    window.addEventListener('application_rejected', event => {
        swal('Success', 'Application is rejected', 'success');
    })
    window.addEventListener('hostel-student-stored', event => {
        swal('Success', 'Student saved', 'success');
    })
    window.addEventListener('student-not-found', event => {
        swal('Opps', 'Student Not found With the given ID', 'warning');
    })
    window.addEventListener('student-not-found', event => {
        swal('Warning', 'Student Not found with ID '+envent.id, 'warning');
    })
</script>

<style>
    table th,
    table tr td{
        padding: 4px !important;
    }
</style>