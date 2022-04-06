<div class="row mt-3">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="header-title">Recent Issues</h4>
                    <div class="input-group inline" style="width: 350px">
                        <input type="text" id="searchBox" onkeyup="searchBook()" class="form-control" style="display: inline-block" placeholder="Search by student id">
                        <button class="btn btn-secondary btn-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead>
                        <th class="col-2">Student ID</th>
                        <th class="col-2">Student Name</th>
                        <th class="col-3">Book Title</th>
                        <th class="col-2">Issue Date</th>
                        <th class="col-2">Return Date</th>
                        <th class="col-1">Status</th>
                    </thead>
                </table>
                <div style="height: 80vh; overflow-y: scroll">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($issues as $issue)
                            <tr style="cursor: pointer" wire:click = "showissue({{$issue}})"> 
                                <td class="col-2 student_id">{{$issue->student->id}}</td>
                                <td class="col-2">{{$issue->student->name}}</td>
                                <td class="col-3">{{$issue->book->title}}</td>
                                <td class="col-2">{{$issue->issue_date}}</td>
                                <td class="col-2">{{$issue->return_date}}</td>
                                <td class="col-1">{{$issue->status}}</td>
                            </tr>
                            @endforeach
                            <tr style="display:none;" id="noresults"> 
                                <td>(no listings that start with "<span id="qt"></span>")</td> 
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    table tr td{
        padding: 5px !important;
    }
</style>

<script>
    function searchBook(){
        let filter = document.getElementById('searchBox').value;
        let books = document.querySelectorAll('.student_id');

        books.forEach(id => {
            check = id.innerHTML.toLowerCase();
            if (check.indexOf(filter.toLowerCase())>-1) {
                id.parentNode.style.display = '';
            }
            else{
                id.parentNode.style.display = 'none';
            }
        });
    }
</script>