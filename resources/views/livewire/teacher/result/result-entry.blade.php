
<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body py-1 px-3">
              {{-- <form> --}}
                <h2>Result Entry</h2>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group mb-1">
                            <select wire:model = "department_id" id="department_id" class="form-control">
                                <option value="">--Select Department--</option>
                              @foreach ($departments as $dept)
                                    <option value="{{$dept->id}}" @if ($dept->id==102)
                                      selected                              
                                    @endif>{{$dept->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-1">
                            <select wire:model = "course_id" id="course_id" class="form-control">
                                <option value="">--Select Course--</option>
                                @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->title}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <select wire:model = "semester_id" id="semester_id" class="form-control">
                                <option value="">--Select Semester--</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group mb-1">
                            <select wire:model = "exam_id" id="exam_id" class="form-control">
                              <option value="">--Select Exam--</option>
                              @foreach ($exams as $exam)
                                  <option value="{{$exam->id}}">{{$exam->name}}</option>
                              @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input wire:model="full_marks" id="full_marks" type="text" class="form-control" placeholder="Total marks">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input wire:model="student_id" wire:keydown.enter = "changeFocus" id="student_id" type="number" class="form-control" placeholder="Student ID">
                          </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <input wire:model="obtained_marks" id="obtained_marks" type="text" placeholder="Obtained marks" class="form-control">
                        </div>
                    </div>
                </div>
                  <div class="d-flex">
                      <button type="submit" class="btn btn-primary ms-auto" wire:click.prevent="store">Store</button>
                  </div>
              {{-- </form> --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Course Code</th>
                            <th>Obtained marks</th>
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
