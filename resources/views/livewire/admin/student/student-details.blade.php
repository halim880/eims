<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h3>Student Details</h3>
                <table class="table">
                    <tr>
                        <th class="heading">Student ID</th>
                        <th>:</th>
                        <td>{{$student->id}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Student Name</th>
                        <th>:</th>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Department</th>
                        <th>:</th>
                        <td>{{$student->department->name}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Session</th>
                        <th>:</th>
                        <td>{{$student->session->name}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Semester</th>
                        <th>:</th>
                        <td>{{$student->semester->name}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Father Name</th>
                        <th>:</th>
                        <td>{{$student->father_name}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Mother Name</th>
                        <th>:</th>
                        <td>{{$student->mother_name}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Phone</th>
                        <th>:</th>
                        <td>{{$student->phone}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Email</th>
                        <th>:</th>
                        <td>{{$student->email}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Current Address</th>
                        <th>:</th>
                        <td>{{$student->current_address}}</td>
                    </tr>
                    <tr>
                        <th class="heading">Permanent Address</th>
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

<style scoped>
    th, td{
        padding: 5px !important;
    }

    .heading {
        width: 150px;
    }
    .separator{
        width: 30px;
    }
</style>