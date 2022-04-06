
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body py-1 px-3">
              {{-- <form> --}}
                <h2>Result Entry</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <select wire:model = "result.department_id" id="department_id" class="form-control">
                                <option value="">--Select Department--</option>
                              @foreach ($departments as $dept)
                                    <option value="{{$dept->id}}" @if ($dept->id==102)
                                      selected                              
                                    @endif>{{$dept->short_form}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <select wire:model = "result.course_id" id="course_id" class="form-control">
                                <option value="">--Select Course--</option>
                                @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->course_code}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input wire:model="result.full_marks" id="full_marks" type="text" class="form-control" placeholder="Full marks">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group mb-1">
                            <select wire:model = "result.semester_id" id="semester_id" class="form-control">
                                <option value="">--Select Semester--</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group mb-1">
                            <select wire:model = "result.exam_id" id="exam_id" class="form-control">
                              <option value="">--Select Exam--</option>
                              @foreach ($exams as $exam)
                                  <option value="{{$exam->id}}">{{$exam->name}}</option>
                              @endforeach
                          </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input wire:model="result.student_id" wire:keydown.enter = "changeFocus" id="student_id" type="number" class="form-control" placeholder="Student ID">
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input wire:model="result.attendance_marks" wire:keydown.enter = "changeFocus" id="Attendance" type="text" class="form-control" placeholder="Attendance">
                          </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <input wire:model="result.term_test_marks" id="term-test" type="text" placeholder="Term test" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input wire:model="result.final_marks" id="final_marks" type="text" placeholder="Final marks" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary ms-auto" wire:click.prevent="store">Save Result</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Recent Entries</h3>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Course Code</th>
                            <th>Attendance</th>
                            <th>Term test</th>
                            <th>Final</th>
                            <th>Exam</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($recentEntries as $result)
                        <tr class="result" ondblclick="showresult({{$result->student_id}})">
                            <td>{{$result->student_id}}</td>
                            <td>{{$result->course_code}}</td>
                            <td>{{$result->obtained_marks}}</td>
                            <td>{{$result->exam_name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>

<script>
      window.addEventListener('result-stored', event => {
        swal('Success', 'result stored', 'success');
    })
    window.addEventListener('duplicate-entry', event => {
        swal('Invalid Entry', 'Check the Student ID and try again', 'warning');
    })
    window.addEventListener('student-not-found', event => {
        swal('Warning', 'Student Not found with ID '+envent.id, 'warning');
    })


    window.addEventListener('change_fucus_to_obtained_marks', e => {
        $("#obtained_marks").focus();
    });
</script>
