<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Applications</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Form ID</th>
                                    <th>Student Name</th>
                                    {{-- <th>Father's Name</th> --}}
                                    {{-- <th>Mother's Name</th> --}}
                                    {{-- <th>DOB</th> --}}
                                    <th>Phone</th>
                                    <th>Email</th>
                                    {{-- <th>Current Address</th> --}}
                                    <th>Permanent Address</th>

                                    {{-- <th>SSC Board</th>
                                    <th>SSC Group</th>
                                    <th>SSC Reg.</th>
                                    <th>SSC Roll</th>
                                    <th>Passing Year</th>
                                    <th>GPA</th>

                                    <th>HSC Board</th>
                                    <th>HSC Group</th>
                                    <th>HSC Reg.</th>
                                    <th>HSC Roll</th>
                                    <th>Passing Year</th>
                                    <th>GPA</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach ($applications as $application)
                                <tr class="data_row" ondblclick ="showDetails({{$application->id}})">

                                    <td>{{$application->id}}</td>
                                    <td>{{$application->student_name}}</td>
                                    {{-- <td>{{$application->father_name}}</td> --}}
                                    {{-- <td>{{$application->mother_name}}</td> --}}
                                    {{-- <td>{{$application->dob}}</td> --}}
                                    <td>{{$application->phone}}</td>
                                    <td>{{$application->email}}</td>
                                    {{-- <td>{{$application->current_address}}</td> --}}
                                    <td>{{$application->permanent_address}}</td>


                                    {{-- <td>{{$application->ssc_board}}</td>
                                    <td>{{$application->ssc_group}}</td>
                                    <td>{{$application->ssc_reg}}</td>
                                    <td>{{$application->ssc_reg}}</td>
                                    <td>{{$application->ssc_passing_year}}</td>
                                    <td>{{$application->ssc_gpa}}</td>

                                    <td>{{$application->hsc_board}}</td>
                                    <td>{{$application->hsc_group}}</td>
                                    <td>{{$application->hsc_reg}}</td>
                                    <td>{{$application->hsc_reg}}</td>
                                    <td>{{$application->hsc_passing_year}}</td>
                                    <td>{{$application->hsc_gpa}}</td> --}}

                                    <td>
                                        <button wire:click.prevent="approve({{$application->id}})" class="btn btn-primary btn-sm">Aproved</button>
                                        <button wire:click.prevent="reject({{$application->id}})" class="btn btn-danger btn-sm">Reject</button>
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
        padding: 5px !important;
    }
</style>


<script>

    function showDetails(id){
        console.log(id);

        window.location.href = "/admin/admission/application-details/"+id;
    }
</script>