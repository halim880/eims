
<div class="row mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Your Courses</h2>
            </div>
            <div class="card-body">
                
        <table class="table table-stripped">
            <thead>
                <th>Course Titile</th>
                <th>Course Code</th>
                <th>Credit</th>
                <th>Course type</th>
            </thead>
            <tbody>

                @foreach ($courses as $course)
                <tr>
                    <td>{{$course->title}}</td> 
                    <td>{{$course->course_code}}</td>
                    <td>{{$course->credit}}</td>
                    <td>Regular</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
</div>