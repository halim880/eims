
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="inline-form">
                                <label for="">Fee Head name</label>
                                <input wire:model = "setup.head_name"  type="text" class="form-control">
                                @error('setup.head_name') <span style="color: red">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-inline">
                                <label for="">Amount</label>
                                <input wire:model = "setup.amount" type="number" class="form-control">
                                @error('setup.amount') <span style="color: red">{{ $message }}</span> @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            @if ($editMode)
                                <button class="btn btn-success" wire:click.prevent = "update">Update</button>
                            @else
                                <button class="btn btn-success" wire:click.prevent = "store">Save</button>
                            @endif
                            <button class="btn btn-secondary" wire:click.prevent = "clear">Clear</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <table class="table table-striped">
                                <thead>
                                    <th>Head name</th>
                                    <th>Amount</th>
                                    <th>Refundable</th>
                                </thead>
                                <tbody>
                                    @foreach ($setups as $setup)
                                    <tr  wire:click.prevent = "edit({{$setup}})" style="cursor: pointer">
                                        <td style="padding:4px">{{$setup->head_name}}</td>
                                        <td style="padding:4px; text-align:right">{{$setup->amount}}</td>
                                        <td style="padding:4px; text-align:center">{{$setup->refundable}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

