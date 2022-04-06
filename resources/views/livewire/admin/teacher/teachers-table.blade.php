@if (!$show)
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Teachers</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Teacher ID</th>
                                    <th>Teacher Name</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                <tr wire:click ="showDetails({{$teacher}})">
                                    <td>{{$teacher->id}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->designation}}</td>
                                    <td>{{$teacher->department->name}}</td>
                                    <td>
                                        <button wire:click.prevent="edit({{$teacher->id}})" class="btn btn-success btn-sm">Edit</button>
                                        <button wire:click.prevent="delete({{$teacher->id}})" class="btn btn-warning btn-sm">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                                           
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>        
</div>
    
@else
<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body p-4">
              <h2>Teacher Details</h2>
              <div class="row">
                  <div class="col-md-8">
                    <table class="table table-stripped">
                        <tr>
                            <th>Name</th>
                            <td>:</td>
                            <td>{{$teacher->name}}</td>
                        </tr>
                        <tr>
                            <th>Designation </th>
                            <td>:</td>
                            <td>{{$teacher->designation}}</td>
                        </tr>
                        <tr>
                            <th>Department </th>
                            <td>:</td>
                            <td>{{$teacher->department->name}}</td>
                        </tr>
                        <tr>
                            <th>Father's name </th>
                            <td>:</td>
                            <td>{{$teacher->father_name}}</td>
                        </tr>
                        <tr>
                            <th>Mother's name </th>
                            <td>:</td>
                            <td>{{$teacher->mother_name}}</td>
                        </tr>
                        <tr>
                            <th>Phone </th>
                            <td>:</td>
                            <td>{{$teacher->phone}}</td>
                        </tr>
                        <tr>
                            <th>Current Address </th>
                            <td>:</td>
                            <td>{{$teacher->current_address}}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address </th>
                            <td>:</td>
                            <td>{{$teacher->current_address}}</td>
                        </tr>
                        
                    </table>
                  </div>
              </div>
              <h2>Assigned Coures</h2>
              <table class="table table-stripped">
                  <thead>
                      <th>Title</th>
                      <th>Course code</th>
                      <th>Credit</th>
                      <th>Action</th>
                  </thead>
                  <tbody>

                      @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->title}}</td>
                            <td>{{$course->course_code}}</td>
                            <td>{{$course->credit}}</td>
                            <td>
                                <button wire:click.prevent= "removeCourse({{$course->id}})" class="btn btn-warning btn-sm">Remove</button>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
              <button wire:click="back" class="btn btn-secondary btn-sm">Back</button>
              <button wire:click="delete({{$teacher}})" class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
</div>
@endif

<style scoped>
    .data_row{
        cursor: pointer;
    }
    table th,
    table tr td{
        padding: 4px !important;
    }
</style>


<script>

    window.addEventListener('course_removed', event => {
        swal('Success', 'Course removed', 'success');
    })

</script>