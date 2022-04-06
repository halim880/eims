<div class="row">
    <div class="col-md-6">
        <div class="card mt-3">
            <div class="card-header">
                <h3>Issue Book</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_id">Student ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_id">Book ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_id">Issue date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_id">Return date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success">Issue</button>
                <button class="btn btn-sm btn-warning">Clear</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mt-3">
            <div class="card-header">
                <h3>Take Return</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_id">Student ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_id">Book ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success">Take return</button>
                <button class="btn btn-sm btn-warning">Clear</button>
            </div>
        </div>
    </div>
</div>