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
                             <h3 style="margin-bottom:10px;" class="form-heading">Assign Course to Teacher</h1>
                               <div class="form-group">
                                   <label for="title">Course ID</label>
                                   <input wire:model.defer = "states.course_id" type="number" class="form-control">
                                   @error('course.title') <span class="error" style="color: red">{{ $message }}</span> @enderror
                               </div>
             
                               <div class="form-group mb-1">
                                <label>Teacher ID </label>
                                <input wire:model.defer = "states.teacher_id" type="number" class="form-control">
                                @error('course.teacher_id') <span class="error" style="color: red">{{ $message }}</span> @enderror
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
    window.addEventListener('course_assigned', event => {
        swal('Success', 'Course assigned', 'success');
    })
    window.addEventListener('course_or_teacher_not_found', event => {
        swal('Opps', 'Course or teacher not found. please check the entry again', 'warning');
    })
</script>