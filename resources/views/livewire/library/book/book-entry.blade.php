<div class="row mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Book Entry Form</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label for="title">Book Title</label>
                        <input type="text" wire:model.defer = "states.title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Author</label>
                        <input type="text" wire:model.defer = "states.author" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select wire:model.defer = "states.category" class="form-control">
                            <option value="Computer Science" selected>Computer Science</option>
                            <option value="Electrical & Electronics">Electrical & Electronics</option>
                            <option value="Civil & Architecture">Civil & Architecture</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <textarea wire:model.defer="states.details" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_quantity">Total Quantity</label>
                                <input type="text" wire:model.defer = "states.total_quantity" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_quantity">Available</label>
                                <input type="text" wire:model.defer = "states.available" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total_quantity">Rack Number</label>
                                <input type="text" wire:model.defer = "states.available" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total_quantity">Row Number</label>
                                <input type="text" wire:model.defer = "states.available" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total_quantity">Column Number</label>
                                <input type="text" wire:model.defer = "states.available" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success">Save</button>
                <button class="btn btn-sm btn-warning">Clear</button>
            </div>
        </div>
    </div>
</div>
