<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class StudentEntry extends Component
{
    public $student = [];
    public function render()
    {
        return view('livewire.admin.student.student-entry');
    }

    public function store(){
        dd($this->student);
    }
}
