
<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body py-1 px-3">
              {{-- <form> --}}
                <h2>Create Exam</h2>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select wire:model = "states.department_id" id="department_id" class="form-control">
                                <option value="">--Select Department--</option>
                              @foreach ($departments as $dept)
                                    <option value="{{$dept->id}}" @if ($dept->id==102)
                                      selected                              
                                    @endif>{{$dept->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <select wire:model = "states.semester_id" id="semester_id" class="form-control">
                                <option value="">--Select Semester--</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="form-group">
                            <input wire:model="states.name" id="full_marks" type="text" class="form-control" placeholder="Exam name">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Registration deadline: </label>
                            <input wire:model="states.registration_start_date" id="full_marks" type="date" class="form-control" placeholder="Registration Start date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Exam date :</label>
                            <input wire:model="states.registration_end_date" id="full_marks" type="date" class="form-control" placeholder="Registration End date">
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

<script>
      window.addEventListener('exam_stored', event => {
        swal('Success', 'Exam Created', 'success');
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
