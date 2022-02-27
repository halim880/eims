
<div class="row mt-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body p-4">
              <form wire:submit.prevent="store">
                <h2>Apply For Sit</h2>
                <div class="form-group mb-3">
                  <label for="student_id">Student ID</label>
                  <input wire:model.defer = "student_id" type="number" class="form-control" disabled>
                  @error('student_id') <span class="error" style="color: red">{{ $message }}</span> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="states.father_occupation">Father Occupation</label>
                            <input wire:model.defer = "states.father_occupation" type="text" class="form-control" required>
                            @error('states.father_occupation') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="states.father_yearly_income">Yearly Income</label>
                            <input wire:model.defer = "states.father_yearly_income" type="number" class="form-control" required>
                            @error('states.father_yearly_income') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="states.mother_occupation">Mother Occupation</label>
                            <input wire:model.defer = "states.mother_occupation" type="text" class="form-control" required>
                            @error('states.mother_occupation') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="states.mother_yearly_income">Yearly Income</label>
                            <input wire:model.defer = "states.mother_yearly_income" type="number" class="form-control" required>
                            @error('states.mother_yearly_income') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="states.total_family_member">Total Family Member</label>
                            <input wire:model.defer = "states.total_family_member" type="number" class="form-control" required>
                            @error('states.total_family_member') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="states.yearly_family_income">Yearly Family Income</label>
                            <input wire:model.defer = "states.yearly_family_income" type="number" class="form-control" required>
                            @error('states.yearly_family_income') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="states.current_address">Current Address</label>
                    <input wire:model.defer = "states.current_address" type="text" class="form-control" required>
                    @error('states.current_address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="states.current_address">Permanent Address</label>
                    <input wire:model.defer = "states.permanent_address" type="text" class="form-control" required>
                    @error('states.permanent_address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                </div>

                  <div class="d-flex my-2">
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>

<script>
      window.addEventListener('application_submitted', event => {
        swal('Success', 'Application Submitted', 'success');
    })
    window.addEventListener('student-not-found', event => {
        swal('Opps', 'Student Not found With the given ID', 'warning');
    })
    window.addEventListener('student-not-found', event => {
        swal('Warning', 'Student Not found with ID '+envent.id, 'warning');
    })
</script>