<div class="row mt-3">
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
                            <td>{{$student->name}}</td>
                        </tr>
                        <tr>
                            <th>Student ID</th>
                            <th>:</th>
                            <td>{{$student->id}}</td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <th>:</th>
                            <td>{{$student->department->name}}</td>
                        </tr>
                        <tr>
                            <th>Session</th>
                            <th>:</th>
                            <td>{{$student->session->name}}</td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <th>:</th>
                            <td>{{$form->semester->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <th>:</th>
                            <td>{{$form->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <td>{{$form->email}}</td>
                        </tr>
                        <tr>
                            <th>Current Address</th>
                            <th>:</th>
                            <td>{{$form->current_address}}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <th>:</th>
                            <td>{{$form->permanent_address}}</td>
                        </tr>
                    </table>
                    <div class="row">
                        <h3>Courses List</h3>
                        <div class="col">
                            <table class="table table-striped">
                                <thead>
                                    <th>Course title</th>
                                    <th>Code</th>
                                    <th>Credit</th>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->course_code}}</td>
                                        <td>{{$course->credit}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
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
</div>

<script>

    window.addEventListener('hostel-student-stored', event => {
        swal('Success', 'Student saved', 'success');
    })
    window.addEventListener('student-not-found', event => {
        swal('Opps', 'Student Not found With the given ID', 'warning');
    })
    window.addEventListener('student-not-found', event => {
        swal('Warning', 'Student Not found with ID '+envent.id, 'warning');
    })

    window.addEventListener('application_approved', event => {
        swal('Success', 'Application Aproved', 'success');
    })

    window.addEventListener('application_rejected', event => {
        swal('Success', 'Application is rejected', 'success');
    })
</script>