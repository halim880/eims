<?php

namespace App\Http\Livewire\Library\Book;

use App\Models\Book;
use Livewire\Component;

class BooksTable extends Component
{
    public $books;
    public $book;
    public bool $showTable = true;

    public function render()
    {
        $this->books = Book::orderBy('title', 'asc')->get();
        return view('livewire.library.book.books-table');
    }

    public function showBook(Book $book){
        $this->showTable = false;
        $this->book = $book;
    }

    public function back(){
        $this->showTable = true;
        $this->book = null;
    }
}
