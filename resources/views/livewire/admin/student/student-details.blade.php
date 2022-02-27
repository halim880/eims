<div class="row mt-3">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Applicant Details</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Student ID</th>
                        <th>:</th>
                        <td>{{$student->id}}</td>
                    </tr>
                    <tr>
                        <th>Student Name</th>
                        <th>:</th>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <th>:</th>
                        <td>{{$student->father_name}}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <th>:</th>
                        <td>{{$student->mother_name}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <th>:</th>
                        <td>{{$student->phone}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <td>{{$student->email}}</td>
                    </tr>
                    <tr>
                        <th>Current Address</th>
                        <th>:</th>
                        <td>{{$student->current_address}}</td>
                    </tr>
                    <tr>
                        <th>Permanent Address</th>
                        <th>:</th>
                        <td>{{$student->permanent_address}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('student_approved', event => {
        swal('Success', 'student Aproved', 'success');
    })

    window.addEventListener('student_rejected', event => {
        swal('Success', 'student is rejected', 'success');
    })
</script>