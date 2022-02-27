
@if (!$showDetails)
<div class="row mt-2">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Sessions</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Session</th>
                        <th>Batch</th>
                        <th>Admission</th>
                    </thead>
                    <tbody>
                        @foreach ($sessions as $session)
                            <tr wire:click = "show({{$session}})" style="cursor: pointer">
                                <td>{{$session->name}}</td>
                                <td>{{$session->batch}}</td>
                                <td>{{$session->admission_status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Academic Session : {{$session->name}}</h3>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Admission Status</th>
                        <td>:</td>
                        <td>{{$session->admission_status}}</td>
                    </tr>
                    <tr>
                        <th>Admission</th>
                        <td>:</td>
                        <td>
                            @if ($session->canBeOponedAForAdmission())
                                <button wire:click = "openForAdmission" class="btn btn-success btn-sm">Open</button>
                            @else
                                <button wire:click = "openForAdmission" class="btn btn-warning btn-sm" disabled>Opened</button>
                            @endif
                            <button wire:click = "completeAdmission" class="btn btn-secondary btn-sm">Complete</button>
                        </td>
                    </tr>
                    @if ($session->openedForAdmission())
                    <tr>
                        <td>Close for application</td>
                        <td>:</td>
                        <td>
                            <button wire:click = "closeForApplication" class="btn btn-secondary btn-sm">Close for Application</button>
                        </td>
                    </tr>
                    @else 
                    <tr>
                        <td>Open for application</td>
                        <td>:</td>
                        <td>
                            <button wire:click = "openForApplication" class="btn btn-success btn-sm">Open for Application</button>
                        </td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endif

<style>
    table tr td{
        padding: 5px !important;
    }
</style>

<script>
    window.addEventListener('opened_for_admission', event => {
        swal('Success', 'Opened for admission', 'success');
    })

    window.addEventListener('close_for_application', event => {
        swal('Success', 'Closed for application', 'success');
    })

    window.addEventListener('oponed_for_application', event => {
        swal('Success', 'Opened for application', 'success');
    })

    window.addEventListener('admission_completed', event => {
        swal('Success', 'Admission Completed', 'success');
    })
</script>