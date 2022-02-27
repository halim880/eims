<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class StudentDetails extends Component
{
    public $student;

    public function render()
    {
        return view('livewire.admin.student.student-details');
    }

    public function mount($id)
    {
        $this->student = Student::find($id);
    }
}
