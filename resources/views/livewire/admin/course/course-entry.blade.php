<section id="member_registration">
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body px-3">
                     <form wire:submit.prevent="store">
                       @csrf
                       <div class="row">
                           <div class="col">
                             <h3 style="margin-bottom:10px;" class="form-heading">Add New Course</h1>
                               <div class="form-group">
                                   <label for="title">Course Title</label>
                                   <input wire:model.defer = "course.title" type="text" class="form-control">
                                   @error('course.title') <span class="error" style="color: red">{{ $message }}</span> @enderror
                               </div>
             
                               <div class="form-group mb-1">
                                <label>Course code </label>
                                <input wire:model.defer = "course.course_code" type="text" class="form-control">
                                @error('course.code') <span class="error" style="color: red">{{ $message }}</span> @enderror
                            </div>

                               <div class="form-group mb-1">
                                 <label>Credit</label>
                                 <input wire:model.defer = "course.credit" type="text" class="form-control">
                                 @error('course.credit') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <select wire:model.defer="course.department_id" id="" class="form-control">
                                     <option value="">--Select department--</option>
                                     @foreach ($departments as $department)
                                         <option value="{{$department->id}}">{{$department->name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <div class="form-group mb-1">
                                <select wire:model.defer="course.semester_id" id="" class="form-control">
                                    <option value="">--Select Semester--</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{$semester->id}}">{{$semester->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                         </div>
                        <div class="d-flex my-2">
                            <button class="btn btn-primary">Save</button>
                        </div>
                           </div>
                         </div>
                       </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</section>

<script>
    window.addEventListener('course_stored', event => {
        swal('Success', 'Course stored', 'success');
    })
</script>