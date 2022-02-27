@extends('material.layouts.admin.admin')
@section('content')
    
        <div class="container">
            <div class="card">
                <div class="row center-align card-header">
                    <h4 style="padding-top: 20px;">Book Details</h4>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="book-card card z-depth-0">
                            <img src="{{asset('material/image/books/'.$book->image)}}" alt=""  height="250px" width="200px">
                            <div class="center-align">
                                <h5>{{$book->title}}</h5>
                                <p>{{$book->author}}</p>
                            </div>  
                        </div>
                    </div>
                    <div class="col s12 m7">
                        <div class="info">
                            <div>
                                <p>Book info. </p>
                            </div>
                            <table class="striped">
                                <tr>
                                    <td>Bood id</td>
                                    <td>:</td>
                                    <td>{{$book->id}}</td>
                                </tr>
                    
                                
                                <tr>
                                    <td>Available</td>
                                    <td>:</td>
                                    <td>{{$book->available}}</td>
                                </tr>
                                <tr>
                                    <td>Issued</td>
                                    <td>:</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col s12 m7">
                       <div class="info">
                        <div>
                            <p>Location in the Library</p>
                        </div>
                        <table class="striped">
                            <tr>
                                <td>Rack No.</td>
                                <td>:</td>
                                <td>{{$book->rack_no}}</td>
                            </tr>
                            
                            <tr>
                                <td>Row</td>
                                <td>:</td>
                                <td>{{$book->row_no}}</td>
                            </tr>
                            <tr>
                                <td>Row</td>
                                <td>:</td>
                                <td>{{$book->col_no}}</td>
                            </tr>
                        </table>
                    </div>
                       </div>
                    
                </div>
                <div class="book-description">
                    <h5>Description</h5>
                    {{$book->details}} <br>
                </div>
                <div class="card-action center-align">
                    <a href="{{route('library.book.edit', $book)}}">Edit</a>
                    <a href="{{route('library.book.destroy', $book)}}">Remove</a>
                </div>
        </div>
        </div>
@endsection

<style scoped>
    table {
        display: inline-block;
        margin: 10px;
        width: 80% !important;
    }
    table td{
        padding:10px !important;
    }
    .book-card{
        width: 90%;
        /* padding: 10px; */
        margin-top: 10px !important;
        margin-left: 20px !important;
    }
    .book-description{
        max-height: 250px;
        overflow: auto;
        margin: 10px;
        border: 1px solid rgb(223, 245, 252);
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        color: rgb(16, 70, 70);
    }
    .book-location{
        width: 200px;
        color: blueviolet;
    }
    .card-header::after{
        position: absolute;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        content: '';
        align-items: center;
        display: block;
        height: 2px;
        width: 200px;
        background: teal;
    }
    .info{
        padding: 20px;
    }
</style>