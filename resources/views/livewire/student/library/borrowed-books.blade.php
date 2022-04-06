<div class="row mt-2">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Borrowed books</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Book title</th>
                        <th>Borrow date</th>
                        <th>Return date</th>
                        <th>Returned at</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($issues as $issue)
                        <tr>
                            <td>{{$issue->book->title}}</td>
                            <td>{{$issue->issue_date}}</td>
                            <td>{{$issue->return_date}}</td>
                            <td>{{$issue->returned_at}}</td>
                            <td>{{$issue->status}}</td>
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