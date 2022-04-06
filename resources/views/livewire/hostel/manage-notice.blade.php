

<div class="row mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Create Notice</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="form-group mb-1">
                        <label for="title">Title</label>
                        <input type="text" wire:model.defer = "states.title" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="title">Content</label>
                        <textarea wire:model.defer = "states.content" name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('notice_created', event => {
        swal('Success', 'Notice created', 'success');
    })
</script>