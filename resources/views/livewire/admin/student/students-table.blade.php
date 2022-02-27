<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">students</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    {{-- <th>DOB</th> --}}
                                    <th>Phone</th>
                                    {{-- <th>Email</th>
                                    <th>Current Address</th>
                                    <th>Permanent Address</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach ($students as $student)
                                <tr class="data_row" ondblclick ="showDetails({{$student->id}})">

                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->father_name}}</td>
                                    <td>{{$student->mother_name}}</td>
                                    {{-- <td>{{$student->dob}}</td> --}}
                                    <td>{{$student->phone}}</td>
                                    {{-- <td>{{$student->email}}</td>
                                    <td>{{$student->current_address}}</td>
                                    <td>{{$student->permanent_address}}</td> --}}

                                    <td>
                                        <button wire:click.prevent="reject({{$student->id}})" class="btn btn-success btn-sm">Edit</button>
                                        <button wire:click.prevent="approve({{$student->id}})" class="btn btn-warning btn-sm">Delete</button>
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

<style scoped>
    .data_row{
        cursor: pointer;
    }

    table tr td{
        padding: 4px !important;
    }
</style>


<script>

    function showDetails(id){
        console.log(id);

        window.location.href = "/admin/student/details/"+id;
    }
</script>