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
                             <h3 style="margin-bottom:10px;" class="form-heading">Add New Teacher</h1>
                               <div class="form-group">
                                   <label for="name">Teacher Name</label>
                                   <input wire:model.defer = "teacher.name" type="text" class="form-control">
                                   @error('teacher.name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                               </div>
             
                               <div class="form-group mb-1">
                                <label>Designation </label>
                                <input wire:model.defer = "teacher.designation" type="text" class="form-control">
                                @error('teacher.designation') <span class="error" style="color: red">{{ $message }}</span> @enderror
                            </div>

                               <div class="form-group mb-1">
                                 <label>Father Name</label>
                                 <input wire:model.defer = "teacher.father_name" type="text" class="form-control">
                                 @error('teacher.father_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Mother Name</label>
                                 <input wire:model.defer = "teacher.mother_name" type="text" class="form-control">
                                 @error('teacher.mother_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>

                             <div class="form-group mb-1">
                                <label>NID</label>
                                <input wire:model.defer = "teacher.nid" type="text" class="form-control">
                                @error('teacher.nid') <span class="error" style="color: red">{{ $message }}</span> @enderror
                            </div>
             
                               <div class="form-group mb-1">
                                 <label for="email">Date of Birth</label>
                                 <input wire:model.defer = "teacher.dob" type="date" class="form-control" required>
                               </div>
             
                               <div class="form-group mb-1">
                                 <label>Phone</label>
                                 <input wire:model.defer = "teacher.phone" type="number" class="form-control">
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Email</label>
                                 <input wire:model.defer = "teacher.email" type="email" class="form-control">
                                 @error('teacher.email') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Current Address</label>
                                 <input wire:model.defer = "teacher.current_address" type="text" class="form-control">
                                 @error('teacher.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Parmanent Address</label>
                                 <input wire:model.defer = "teacher.permanent_address" type="text" class="form-control">
                                 @error('teacher.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
                             <div class="form-group">
                                 <select wire:model.defer="teacher.department_id" id="" class="form-control">
                                     <option value="">--Select department--</option>
                                     @foreach ($departments as $department)
                                         <option value="{{$department->id}}">{{$department->name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                            </div>
                         </div>
                        <div class="d-flex my-2">
                            <button class="btn btn-primary">Submit</button>
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
    window.addEventListener('teacher_stored', event => {
        swal('Success', 'Teacher stored', 'success');
    })
</script>