
<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Notices</h3>
                    <div class="input-group inline" style="width: 350px">
                        <input type="text" id="searchBox" onkeyup="searchStudent()" class="form-control" style="display: inline-block" placeholder="Search by title">
                        <button class="btn btn-secondary btn-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created</th>
                        <th>Published to</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($notices as $notice)
                        <tr>
                            <td>{{$notice->title}}</td>
                            <td>{{$notice->content}}</td>
                            <td>{{$notice->create_at}}</td>
                            <td>{{$notice->published_to}}</td>
                            <td>
                                <button class="btn btn-sm btn-secondary">Publish</button>
                                <button class="btn btn-sm btn-warning">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    table th,
    table tr td{
        padding: 5px !important;
    }
</style>