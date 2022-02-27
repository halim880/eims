<div class="row justify-content-center mt-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body px-4 py2">
             <form wire:submit.prevent="store">
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
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                          Residential
                        </label>
                      </div>
                 <div class="d-flex my-2">
                    <button class="btn btn-primary">Submit</button>
                </div>
               </form>
            </div>
          </div>
    </div>
</div>












<div class="row mt-3">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h4 class="header-title">All Courses</h4>
                    <select wire:change = "change" wire:model = "semester" class="form-control">
                        @foreach ($semesters as $semester)
                            <option value="{{$semester->id}}">{{$semester->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Course Titile</th>
                        <th>Course Code</th>
                        <th>Credit</th>
                        <th>Course type</th>
                    </thead>
                </table>
                <div class="all-courses">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($courses as $course)
                            <tr wire:dblclick.prevent="addCourse({{$course}})" style="cursor: pointer">
                                <td>{{$course->id}}</td> 
                                <td>{{$course->title}}</td> 
                                <td>{{$course->course_code}}</td>
                                <td>{{$course->credit}}</td>
                                <td>Theory</td>
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
                <h4 class="header-title">All Courses</h4>

                <table class="table table-striped">
                    <thead>
                        <th>Course Code</th>
                        <th>Credit</th>
                        <th>type</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        @foreach ($selectedCourses as $key => $course)
                        <tr>
                            <td>{{$course['course_code']}}</td>
                            <td>{{$course['credit']}}</td>
                            <td>
                                <select>
                                    <option value="regular">Regular</option>
                                    <option value="drop">Drop Course</option>
                                    <option value="advance">Advance</option>
                                </select>
                            </td>
                            <td>
                                <button wire:click.prevent = "remove({{$key}})">Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>   
</div>

<style scoped>
    .data_row{
        cursor: pointer;
    }
</style>


<style>
    .all-courses{
        width: 100%;
        height:450px;
        overflow:scroll; 
    }
</style>