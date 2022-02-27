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
                                    <th>Reg. No</th>
                                    <th>Department</th>
                                    <th>Semester</th>
                                    <th>Session</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach ($applications as $application)
                                <tr class="application" ondblclick="showApplication({{$application->form_id}})">
                                    <td>{{$application->form_id}}</td>
                                    <td>{{$application->student_id}}</td>
                                    <td>{{$application->student_name}}</td>
                                    <td>{{$application->department}}</td>
                                    <td>{{$application->semester}}</td>
                                    <td>{{$application->session}}</td>
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

<script>
    function showApplication(id){
        window.location.href = "/hostel/application-details/"+id;
    }
</script>
