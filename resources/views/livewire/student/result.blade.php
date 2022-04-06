<div class="row mt-2">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                @foreach ($semesters as $semester)
                    <div class="result" wire:click = "showResult({{$semester->id}})">
                        {{$semester->name}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Course Code</th>
                        <th>Credit</th>
                        <th>Term test</th>
                        <th>Attendance</th>
                        <th>Final Marks</th>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                        <tr>
                            <td>{{$result->course->cousrse_code}}</td>
                            <td>{{$result->course->credit}}</td>
                            <td>{{$result->term_test_marks}}</td>
                            <td>{{$result->attendance_marks}}</td>
                            <td>{{$result->final_marks}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .result{
        cursor: pointer;
        margin: 10px;
        padding: 10px;
        border: 1px solid rgb(236, 131, 131);
        border-radius: 10px;
        transition: 500ms;
    }
    .result:hover{
        background: rgb(236, 131, 131);
        color: white;
    }
</style>

<script>
    function showResult(semester_id){
        console.log(semester_id);
        window.location.href = 'result-show/'+semester_id;
    }
</script>