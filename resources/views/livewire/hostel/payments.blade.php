
<div class="row mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h3>Payment history</h3>
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <th>student ID</th>
                        <th>Semester</th>
                        <th>amount</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                        <tr>
                            <td>{{$payment->student_id}}</td>
                            <td>{{$payment->semester}}</td>
                            <td>{{$payment->amount}}</td>
                            <td>{{$payment->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    table tr td{
        padding: 5px !important;
    }
</style>