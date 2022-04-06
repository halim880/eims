<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body p-4">
              <h2>Assigned Coures</h2>
              <table class="table table-stripped">
                  <thead>
                      <th>Title</th>
                      <th>Course code</th>
                      <th>Credit</th>
                  </thead>
                  <tbody>

                      @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->title}}</td>
                            <td>{{$course->course_code}}</td>
                            <td>{{$course->credit}}</td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
</div>