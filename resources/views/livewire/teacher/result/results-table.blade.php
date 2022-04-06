<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">results</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Course Code</th>
                                    <th>Attendance</th>
                                    <th>Term test</th>
                                    <th>Final marks</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach ($results as $result)
                                <tr class="result">
                                    <td>{{$result->student_id}}</td>
                                    <td>{{$result->course_code}}</td>
                                    <td>{{$result->attendance_marks}}</td>
                                    <td>{{$result->term_test_marks}}</td>
                                    <td>{{$result->final_marks}}</td>
                                    <td>
                                        <span class="edit_button" wire:click="showresult({{$result}})"><i class="uil-edit"></i></span>
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

<style>
    table tr td{
        padding: 5px !important;
    }
     
    .edit_button{
        cursor: pointer;
        color: rgb(13, 192, 103);
    }
    .edit_button i{
        font-size: 20;
    }
</style>