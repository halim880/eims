
@if (!$next)
<div class="row mt-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body px-4 py2">
             {{-- <form wire:submit.prevent="store"> --}}
               @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input wire:model= "states.student_id" class="form-control" type="number" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select wire:model="states.semester_id" id="" class="form-control">
                                    <option value="">--Select semester--</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{$semester->id}}">{{$semester->name}}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select wire:model="states.exam_id" id="" class="form-control">
                                    <option value="">--Select exam--</option>
                                    @foreach ($exams as $exam)
                                        <option value="{{$exam->id}}">{{$exam->name}}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input wire:model= "states.email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input wire:model = "states.phone" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Current Address</label>
                        <input wire:model = "states.current_address" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Permanent Address</label>
                        <input wire:model = "states.permanent_address" type="text" class="form-control">
                    </div>
                    <div class="form-check mt-1">
                        <input wire:model="states.is_residential" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                          Residential
                        </label>
                      </div>
                 <div class="d-flex my-2">
                    <button class="btn btn-primary" wire:click="next">Next</button>
                </div>
               {{-- </form> --}}
            </div>
          </div>
    </div>
</div>
@else

<div class="row mt-3">
    <div class="col-6">
        <div class="card">
            <div class="card-body">                
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Course Code</th>
                        <th>Credit</th>
                    </thead>
                </table>
                <div class="all-courses">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($courses as $course)
                            <tr wire:dblclick.prevent="addCourse({{$course}})" style="cursor: pointer">
                                <td>{{$course->id}}</td> 
                                <td>{{$course->course_code}}</td>
                                <td>{{$course->credit}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Selected Courses</h4>

                <table class="table table-striped">
                    <thead>
                        <th>Course Code</th>
                        <th>Credit</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        @foreach ($selectedCourses as $key => $course)
                        <tr>
                            <td>{{$course['course_code']}}</td>
                            <td>{{$course['credit']}}</td>
                            <td>
                                <span wire:click.prevent = "remove({{$key}})" style="cursor: pointer; color: red">Remove</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                <div class="row">
                    <div class="col">
                        <button wire:click="back" class="btn btn-secondary">Back</button>
                        <button wire:click="store" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>   
</div>
@endif



<script>
    window.addEventListener('application_submitted', event => {
        swal('Success', 'Application submitted', 'success');
        window.location.href = 'student/registration-form/'+ event.form_id;
    })
</script>





<style scoped>
    .data_row{
        cursor: pointer;
    }
    .all-courses{
        width: 100%;
        height:450px;
        overflow-y:scroll; 
    }
    table th, table tr td{
        padding: 4px !important;
    }
</style>