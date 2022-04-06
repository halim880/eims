<div class="row mt-3">
    <div class="col-md-10">
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
                <table class="table table-striped">
                    <thead>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Abailable</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td class="book_title">{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->available}}</td>
                            <td>
                                <button class="btn btn-sm btn-secondary">Borrow</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
</script>