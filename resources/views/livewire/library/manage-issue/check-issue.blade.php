<div class="row mt-3">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="input-group inline" style="width: 350px">
                    <input type="number" wire:model="student_id" class="form-control" style="display: inline-block" placeholder="e.g 2016331509">
                    <button wire:click="searchIssueByStudentId" class="btn btn-secondary btn-sm">Search</button>
                </div>
            </div>
            <div class="card-body">
                @if ($student!=null)
                <table>
                    <tr>
                        <th>Student Id</th>
                        <td>:</td>
                        <td>{{$student->id}}</td>
                    </tr>
                    <tr>
                        <th>Student Name</th>
                        <td>:</td>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td>:</td>
                        <td>{{$student->department->name}}</td>
                    </tr>
                    <tr>
                        <th>Session</th>
                        <td>:</td>
                        <td>{{$student->session->name}}</td>
                    </tr>
                    <tr>
                        <th>Payable</th>
                        <td>:</td>
                        <td>0 tk</td>
                    </tr>
                    <tr>
                        <th>Due</th>
                        <td>:</td>
                        <td>0 tk</td>
                    </tr>
                </table>
                <hr>
                <h3>Issued Book List</h3>
                <table class="table table-striped">
                    <thead>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Issue Date</th>
                        <th>Return Date</th>
                        <th>Returned At</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @if ($issues->count()<1)
                        <tr>
                            <td colspan="6">No issue found</td>
                        </tr>
                        @else
                        @foreach ($issues as $issue)
                        <tr>
                            <td>{{$issue->book->id}}</td>
                            <td>{{$issue->book->title}}</td>
                            <td>{{$issue->issue_date}}</td>
                            <td>{{$issue->return_date}}</td>
                            <td>{{$issue->updated_at->format('d-m-Y')}}</td>
                            <td>{{$issue->status}}</td>
                        </tr>
                        @endforeach

                        @endif
                    </tbody>
                </table>
                <div class="card-header">
                    <button class="btn-sm btn-success">Clear</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    table tr td{
        padding: 5px !important;
    }
</style>