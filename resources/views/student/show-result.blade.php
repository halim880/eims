<div class="row mt-2">
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