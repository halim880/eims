<?php

namespace App\Http\Livewire\Library;

use App\Models\Book;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalStudents;
    public $totalBooks;

    public function render()
    {
        $this->totalStudents = 23;
        $this->totalBooks = Book::count();
        return view('livewire.library.dashboard');
    }
}
