<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentClearance extends Component
{
    public function render()
    {
        return view('livewire.student-clearance');
    }
}
