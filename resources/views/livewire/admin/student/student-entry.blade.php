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
                             <h3 style="margin-bottom:10px;" class="form-heading">Student Entry Form</h1>
                               <div class="form-group">
                                   <label for="name">Student Name</label>
                                   <input wire:model.defer = "student.student_name" type="text" class="form-control">
                                   @error('student.student_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                               </div>
             
                               <div class="form-group mb-1">
                                 <label>Father Name</label>
                                 <input wire:model.defer = "student.father_name" type="text" class="form-control">
                                 @error('student.father_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Mother Name</label>
                                 <input wire:model.defer = "student.mother_name" type="text" class="form-control">
                                 @error('student.mother_name') <span class="error" style="color: red">{{ $message }}</span> @enderror

                             </div>
             
                               <div class="form-group mb-1">
                                 <label for="email">Date of Birth</label>
                                 <input wire:model.defer = "student.dob" type="date" class="form-control" required>
                               </div>
             
                               <div class="form-group mb-1">
                                 <label>Phone</label>
                                 <input wire:model.defer = "student.phone" type="number" class="form-control">
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Email</label>
                                 <input wire:model.defer = "student.email" type="email" class="form-control">
                                 @error('student.email') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Current Address</label>
                                 <input wire:model.defer = "student.current_address" type="text" class="form-control">
                                 @error('student.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Parmanent Address</label>
                                 <input wire:model.defer = "student.parmanent_address" type="text" class="form-control">
                                 @error('student.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror

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
    window.addEventListener('student_submitted', event => {
        swal('Success', 'student submitted', 'success');
    })
</script>