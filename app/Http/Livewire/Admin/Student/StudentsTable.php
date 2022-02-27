<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class StudentsTable extends Component
{
    public $students;
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.admin.student.students-table');
    }
}
