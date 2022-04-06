
<div class="col-md-10">
    <div class="card">
        <div class="card-header">
            <h3>Result</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Student ID</th>
                    <th>:</th>
                    <td>{{$result->student_id}}</td>
                </tr>
                <tr>
                    <th>Exam</th>
                    <th>:</th>
                    <td>{{$result->exam_name}}</td>
                </tr>
                <tr>
                    <th>Course code</th>
                    <th>:</th>
                    <td>{{$result->course_code}}</td>
                </tr>
                <tr>
                    <th>Total marks</th>
                    <th>:</th>
                    <td>{{$result->full_marks}}</td>
                </tr>
                <tr>
                    <th>Attendance</th>
                    <th>:</th>
                    <td>
                        @if (!$editable)
                            {{$attendance_marks}}
                        @else 
                            <input type="number" wire:model = "attendance_marks">
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Term test</th>
                    <th>:</th>
                    <td>
                        @if (!$editable)
                            {{$term_test_marks}}
                        @else 
                            <input type="number" wire:model = "term_test_marks">
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Final marks</th>
                    <th>:</th>
                    <td>
                        @if (!$editable)
                            {{$final_marks}}
                        @else 
                            <input type="number" wire:model = "final_marks">
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Stored By</th>
                    <th>:</th>
                    <td>{{$result->stored_by}}</td>
                </tr>
                <tr>
                    <th>Stored at</th>
                    <th>:</th>
                    <td>{{$result->created_at->format('h:m:s a, d M Y')}}</td>
                </tr>
            </table>
        </div>

        <div class="card-footer">
            @if (!$editable)
                <button wire:click.prevent="edit" class="btn btn-primary btn-sm">Edit</button>
            @else
                <button wire:click.prevent="update" class="btn btn-primary btn-sm">Update</button>
            @endif
            <button wire:click.prevent="confirmDelete" class="btn btn-danger btn-sm">Delete</button>
        </div>
    </div>
</div>

<script>
    window.addEventListener('result_updated', event => {
      swal('Success', 'Result updated', 'success');
  })
  window.addEventListener('result_deleted', event => {
      swal('Success', 'Result deleted', 'success');
  })


  window.addEventListener('confirm_delete', event => {
      swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            Livewire.emit('delete_confirmed');
        }
    });
  })
</script>


<style>
    table th,
    table tr td{
        padding: 4px !important;
    }
</style>