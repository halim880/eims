<div class="row mt-3">
    <div class="col-md-6">
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
                        <td> 4000 (Security money)</td>
                    </tr>
                    <tr>
                        <th>Total Due</th>
                        <td>:</td>
                        <td>{{$total_due}} tk</td>
                    </tr>
                </table>
                <hr>
                <h3>Payment History</h3>
                <table class="table table-striped">
                    <thead>
                        <th>Particular</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @if ($payments->count()<1)
                        <tr>
                            <td colspan="3">No payments found</td>
                        </tr>
                        @else
                        @foreach ($payments as $payment)
                        <tr>
                            <td>{{$payment->semester}}</td>
                            <td>{{$payment->amount}}</td>
                            <td>{{$payment->status}}</td>
                        </tr>
                        @endforeach

                        @endif
                    </tbody>
                </table>
                <div class="card-header">
                    <button class="btn btn-sm btn-success">Clear</button>
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