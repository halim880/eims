
<div class="row mt-2">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body p-4">
              <form wire:submit.prevent="store">
                <h2>Hostel Student Entry</h2>
                <div class="form-group mb-1">
                  <label for="student_id">Student ID</label>
                  <input wire:model.defer = "student_id" type="number" class="form-control" required>
                  @error('student_id') <span class="error" style="color: red">{{ $message }}</span> @enderror
                </div>

                <div class="form-group mb-1">
                    <label for="semester_id">Hostel</label>
                    <select wire:model.defer = "hostel_id" id="hostel_id" class="form-control">
                        <option value="">--Select Hostel--</option>
                        @foreach ($hostels as $hostel)
                            <option value="{{$hostel->id}}">{{$hostel->name}}</option>
                        @endforeach
                    </select>
                  </div>
  
                <div class="form-group mb-1">
                  <label for="semester_id">Semester</label>
                  <select wire:model.defer = "semester_id" id="semester_id" class="form-control">
                      <option value="">--Select Semester--</option>
                      @foreach ($semesters as $semester)
                          <option value="{{$semester->id}}">{{$semester->name}}</option>
                      @endforeach
                  </select>
                </div>
  
                <div class="form-group mb-1">
                  <label for="room_no">Room No.</label>
                  <input wire:model.defer = "room_no" type="number" class="form-control" required>
                  @error('room_no') <span class="error" style="color: red">{{ $message }}</span> @enderror
                </div>
  
                <div class="form-group mb-1">
                  <label for="sit_no">Sit No.</label>
                  <input wire:model.defer = "sit_no" type="number" class="form-control" required>
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
      window.addEventListener('hostel-student-stored', event => {
        swal('Success', 'Student saved', 'success');
    })
    window.addEventListener('student-not-found', event => {
        swal('Opps', 'Student Not found With the given ID', 'warning');
    })
    window.addEventListener('student-not-found', event => {
        swal('Warning', 'Student Not found with ID '+envent.id, 'warning');
    })
</script>