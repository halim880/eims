
<div class="row mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Payment history</h2>

                <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                        token="if you have any token validation"
                        postdata="your javascript arrays or objects which requires in backend"
                        order="If you already have the transaction generated for current order"
                        endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                </button>
            </div>
            <div class="card-body">
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