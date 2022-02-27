
@if (!$current_session->openedForAdmission())
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>
                        Application Closed
                    </h3>
                </div>
            </div>
        </div>
    </div>
@else
    
<section id="member_registration">
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body px-4 py2">
                     <form wire:submit.prevent="store">
                       @csrf
                       <div class="row">
                           <div class="col">
                             <h3 style="margin-bottom:20px; text-align:center" class="form-heading">Apply For Admission</h1>
                                <div class="form-group">
                                   <label for="name">Student Name</label>
                                   <input wire:model.defer = "application.student_name" type="text" class="form-control">
                                   @error('application.student_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                               </div>
             
                               <div class="form-group mb-1">
                                 <label>Father Name</label>
                                 <input wire:model.defer = "application.father_name" type="text" class="form-control">
                                 @error('application.father_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Mother Name</label>
                                 <input wire:model.defer = "application.mother_name" type="text" class="form-control">
                                 @error('application.mother_name') <span class="error" style="color: red">{{ $message }}</span> @enderror

                             </div>
             
                               <div class="form-group mb-1">
                                 <label for="email">Date of Birth</label>
                                 <input wire:model.defer = "application.dob" type="date" class="form-control" required>
                               </div>
             
                               <div class="form-group mb-1">
                                 <label>Phone</label>
                                 <input wire:model.defer = "application.phone" type="number" class="form-control">
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Email</label>
                                 <input wire:model.defer = "application.email" type="email" class="form-control">
                                 @error('application.email') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Current Address</label>
                                 <input wire:model.defer = "application.current_address" type="text" class="form-control">
                                 @error('application.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                             </div>
             
                             <div class="form-group mb-1">
                                 <label>Parmanent Address</label>
                                 <input wire:model.defer = "application.permanent_address" type="text" class="form-control">
                                 @error('application.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror

                             </div>
                            </div>
                         </div>

                         <div class="row mt-2">
                            <h3>Academic Information</h3>
                            <div class="col-md-6">
                                {{-- Admin Info --}}
                                <div id="admin_info">
                                  <div class="form-group mb-1">
                                    <label for="application.ssc_board">SSC/Equivalent Board</label>
                                    <input wire:model.defer = "application.ssc_board"  type="text" class="form-control" required>
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="application.ssc_reg">SSC/Equivalent Registration No.</label>
                                    <input wire:model.defer = "application.ssc_reg"  type="text" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="first_name">Roll No.</label>
                                    <input wire:model.defer = "application.ssc_roll"  type="text" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
                                </div>

                                <div class="form-group mb-1">
                                    <label for="group"> Group</label>
                                    <select wire:model.defer = "application.ssc_group" id="group" class="form-control">
                                        <option value="science">--Select Group--</option>
                                        <option value="science">Science</option>
                                        <option value="science">Arts</option>
                                        <option value="science">Commerce</option>
                                    </select>
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="passing_year">Passing Year</label>
                                    <input wire:model.defer = "application.ssc_passing_year" type="number" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="gpa">GPA </label>
                                    <input wire:model.defer = "application.ssc_gpa" type="text" class="form-control" required value="{{old('first_name')}}">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-1">
                                    <label for="hsc_board">HSC/Equivalent Board</label>
                                    <input wire:model.defer = "application.hsc_board" type="text" class="form-control" id="hsc_board" name="hsc_board" required value="{{old('first_name')}}">
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="first_name">HSC/Equivalent Registration No.</label>
                                    <input wire:model.defer = "application.hsc_reg" type="text" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="first_name">Roll No.</label>
                                    <input wire:model.defer = "application.hsc_roll" type="text" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
                                </div>

                                <div class="form-group mb-1">
                                    <label for="first_name"> Group</label>
                                    <select wire:model.defer = "application.hsc_group"  name="group" id="group" class="form-control">
                                        <option value="science">--Select Group--</option>
                                        <option value="science">Science</option>
                                        <option value="science">Arts</option>
                                        <option value="science">Commerce</option>
                                    </select>
                                </div>
                
                                <div class="form-group mb-1">
                                    <label >Passing Year</label>
                                    <input wire:model.defer = "application.hsc_passing_year" type="number" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="first_name">GPA </label>
                                    <input wire:model.defer = "application.hsc_gpa" type="text" class="form-control" id="first_name" name="first_name" required value="{{old('first_name')}}">
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

@endif

<script>
    window.addEventListener('application_submitted', event => {
        swal('Success', 'Application submitted', 'success');
    })
</script>