
@if ($showTable)
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="header-title">List of books</h4>
                    <div class="input-group inline" style="width: 350px">
                        <input type="text" id="searchBox" onkeyup="searchBook()" class="form-control" style="display: inline-block" placeholder="Search by title">
                        <button class="btn btn-secondary btn-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead>
                        <th class="col-2">Book ID</th>
                        <th class="col-4">Title</th>
                        <th class="col-4">Author</th>
                        <th class="col-2">Total</th>
                        <th class="col-2">Available</th>
                    </thead>
                </table>
                <div style="height: 80vh; overflow: scroll">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($books as $book)
                            <tr style="cursor: pointer" wire:click = "showBook({{$book}})"> 
                                <td class="col-1">{{$book->id}}</td>
                                <td class="col-4 book_title">{{$book->title}}</td>
                                <td class="col-3">{{$book->author}}</td>
                                <td class="col-2">{{$book->total_quantity}} pcs</td>
                                <td class="col-2">{{$book->available}} pcs</td>
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
@else
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body p-4">
                  <h2>Book Details</h2>
                  <div class="row">
                      <div class="col-md-6">
                        <table class="table table-stripped">
                            <tr>
                                <th>Title</th>
                                <td>:</td>
                                <td>{{$book->title}}</td>
                            </tr>
                            <tr>
                                <th>Author </th>
                                <td>:</td>
                                <td>{{$book->author}}</td>
                            </tr>
                            <tr>
                                <th>Category </th>
                                <td>:</td>
                                <td>{{$book->category}}</td>
                            </tr>
                            <tr>
                                <th>Total </th>
                                <td>:</td>
                                <td>{{$book->total_quantity}}</td>
                            </tr>
                            <tr>
                                <th>Available </th>
                                <td>:</td>
                                <td>{{$book->available}}</td>
                            </tr>
                            
                        </table>
                      </div>
                      <div class="col-md-6">
                        <table class="table table-stripped">
                            <tr>
                                <th>Rack</th>
                                <td>:</td>
                                <td>{{$book->rack_no}}</td>
                            </tr> 
                            <tr>
                                <th>Row</th>
                                <td>:</td>
                                <td>{{$book->row_no}}</td>
                            </tr>  
                            <tr>
                                <th>Column</th>
                                <td>:</td>
                                <td>{{$book->col_no}}</td>
                            </tr>                        
                        </table>
            
                      </div>
                      <div class="col p-3" style="max-height: 400px; overflow-y:scroll">
                        <p style="font-size: 16px">{{$book->details}}</p>
                      </div>
                  </div>
                  <button class="btn btn-secondary btn-sm" wire:click="back">back</button>
                  <button wire:click="issue({{$book}})" class="btn btn-primary btn-sm">Issue</button>
                  <button wire:click="edit({{$book}})" class="btn btn-success btn-sm">Edit</button>
                  <button wire:click="delete({{$book}})" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
    @endif
</div>


<script>
    function searchBook(){
        let filter = document.getElementById('searchBox').value;
        let books = document.querySelectorAll('.book_title');

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

    window.addEventListener('book-updated', event => {
        swal('Success', 'book is updated', 'success');
    })

    window.addEventListener('book-saved', event => {
        swal('Success', 'book saved', 'success');
    })

    window.addEventListener('confirm-delete', event => {
        swal({
            title: "book will be deactivated?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                Livewire.emit('deleteConfirmed');
            }
        });

    })

    window.addEventListener('book-deactivated', event => {
        swal('Success', 'book is deactivated', 'success');
    })
</script>


<style>
    
table tr td, table th{
	padding: 4px !important;
}
</style>