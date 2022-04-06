<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Courses</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="col-2">Course ID</th>
                                    <th class="col-4">Title</th>
                                    <th class="col-2">Course code</th>
                                    <th class="col-2">Credit</th>
                                    <th class="col-2">Action</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="table-container">
                            <table class="table table-striped dt-responsive nowrap w-100">
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr class="data_row" ondblclick ="showDetails({{$course->id}})">
                                        <td class="col-2">{{$course->id}}</td>
                                        <td class="col-4">{{$course->title}}</td>
                                        <td class="col-2">{{$course->course_code}}</td>
                                        <td class="col-2">{{$course->credit}}</td>
                                        <td class="col-2">
                                            <button wire:click.prevent="edit({{$course->id}})" class="btn btn-success btn-sm">Edit</button>
                                            <button wire:click.prevent="delete({{$course->id}})" class="btn btn-warning btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                        </div>                                         
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
    .table-container{
        height: 80vh;
        overflow-y: scroll;
    }

    table tr td{
        padding: 4px !important;
    }
</style>


<script>

    function showDetails(id){
        console.log(id);

        window.location.href = "/admin/course/details/"+id;
    }
</script>