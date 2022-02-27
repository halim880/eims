
<div class="row mt-2">
    <div class="col-md-6">
        <div class="card">
            <h3 class="card-header">Create New Session</h3>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name </label>
                    <input wire:model = "session.name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Batch No. </label>
                    <input wire:model = "session.batch_number" type="number" class="form-control">
                </div>
                <button wire:click.prevent = "store" class="btn btn-success btn-sm mt-2">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('session_created', event => {
        swal('Success', 'Session Created', 'success');
    })

    window.addEventListener('invalid_input', event => {
        swal('Invalid input', 'Session or Batch Already Exists', 'warning');
    })
</script>