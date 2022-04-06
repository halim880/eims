<?php

namespace App\Http\Livewire\Student;

use App\Models\RegistrationForm as ModelsRegistrationForm;
use App\Models\Student;
use Livewire\Component;

class RegistrationForm extends Component
{
    public $form;
    public $student;
    public $courses;

    public function render()
    {
        return view('livewire.student.registration-form');
    }

    public function mount(int $id){
        $this->form = ModelsRegistrationForm::findOrFail($id);
        $this->student = $this->form->student;
        $this->courses = $this->form->courses;
    }
}
