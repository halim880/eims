
@if (!$showDetails)
<div class="row mt-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Exams</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Exam name</th>
                        <th>Status</th>
                        <th>Result</th>
                    </thead>
                    <tbody>
                        @foreach ($exams as $exam)
                            <tr wire:click = "show({{$exam}})" style="cursor: pointer">
                                <td>{{$exam->name}}</td>
                                <td>{{$exam->status}}</td>
                                <td>{{$exam->getResultStatus()}}</td>
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
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Exam : {{$exam->name}}</h3>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Exam Status</th>
                        <td>:</td>
                        <td>{{$exam->status}}</td>
                    </tr>
                    <tr>
                        <th>Notice</th>
                        <td>:</td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>Routine</td>
                        <td>:</td>
                        <td>
                            <button wire:click = "closeForApplication" class="btn btn-secondary btn-sm">Create routine</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td>:</td>
                        <td>
                            <button wire:click = "openForApplication" class="btn btn-success btn-sm">Publish Result</button>
                        </td>
                    </tr>
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
