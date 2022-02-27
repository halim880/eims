
@if (!$approving)

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
                        <td>{{$application->student_name}}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <th>:</th>
                        <td>{{$application->father_name}}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <th>:</th>
                        <td>{{$application->mother_name}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <th>:</th>
                        <td>{{$application->phone}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <td>{{$application->email}}</td>
                    </tr>
                    <tr>
                        <th>Current Address</th>
                        <th>:</th>
                        <td>{{$application->current_address}}</td>
                    </tr>
                    <tr>
                        <th>Permanent Address</th>
                        <th>:</th>
                        <td>{{$application->permanent_address}}</td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-6">
                        HSC Details
                        <table class="table">
                            <tr>
                                <th>Board</th>
                                <th>:</th>
                                <td>{{$application->hsc_board}}</td>
                            </tr>
                            <tr>
                                <th>Group</th>
                                <th>:</th>
                                <td>{{$application->hsc_group}}</td>
                            </tr>
                            <tr>
                                <th>Registration No.</th>
                                <th>:</th>
                                <td>{{$application->hsc_reg}}</td>
                            </tr>
                            <tr>
                                <th>Roll No.</th>
                                <th>:</th>
                                <td>{{$application->hsc_roll}}</td>
                            </tr>
                            <tr>
                                <th>Passing Year</th>
                                <th>:</th>
                                <td>{{$application->hsc_passing_year}}</td>
                            </tr>
                            <tr>
                                <th>GPA</th>
                                <th>:</th>
                                <td>{{$application->hsc_gpa}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        SSC Details
                        <table class="table">
                            <tr>
                                <th>Board :</th>
                                <td>{{$application->ssc_board}}</td>
                            </tr>
                            <tr>
                                <th>Group :</th>
                                <td>{{$application->ssc_group}}</td>
                            </tr>
                            <tr>
                                <th>Registration No. :</th>
                                <td>{{$application->ssc_reg}}</td>
                            </tr>
                            <tr>
                                <th>Roll No.</th>
                                <th>:</th>
                                <td>{{$application->ssc_roll}}</td>
                            </tr>
                            <tr>
                                <th>Passing Year</th>
                                <th>:</th>
                                <td>{{$application->ssc_passing_year}}</td>
                            </tr>
                            <tr>
                                <th>GPA</th>
                                <th>:</th>
                                <td>{{$application->ssc_gpa}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button wire:click.prevent="approve" class="btn btn-primary btn-sm" @if ($approved || $rejected)
                    disabled
                @endif>Approve</button>
                <button wire:click.prevent="reject" class="btn btn-danger btn-sm" @if ($approved || $rejected)
                disabled
            @endif>Reject</button>
            </div>
        </div>
    </div>
</div>

@else

    <div class="row mt-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-2">
                    <div class="form-group">
                        <label for="department_id">Select Department</label>
                        <select wire:model="application.department_id" id="" class="form-control">
                            <option value="">--select department--</option>
                            @foreach ($departments as $dept)
                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Select Semester</label>
                        <select wire:model="application.semester_id" id="" class="form-control">
                            <option value="">--select department--</option>
                            @foreach ($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="student_id">Give an unique id for the student</label>
                        <input type="text" wire:model="application.student_id" class="form-control">
                        <span wire:click="autoGenerateId" style="cursor: pointer; color: green; text-weight:bold;">auto generate</span>
                    </div>
                </div>
                <div class="card-footer">
                    <button wire:click.prevent="store" class="btn btn-primary btn-sm" @if ($approved || $rejected)
                        disabled
                    @endif>Save</button>
                </div>
            </div>
        </div>
    </div>

@endif

<script>
    window.addEventListener('application_approved', event => {
        swal('Success', 'Application Aproved', 'success');
    })

    window.addEventListener('application_rejected', event => {
        swal('Success', 'Application is rejected', 'success');
    })
</script>


<style>
    table tr td,
    table th{
        padding: 5px !important;
    }
</style>