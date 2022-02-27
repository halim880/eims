<?php

namespace App\Http\Livewire\Admin;

use App\Models\Department;
use App\Models\Exam;
use App\Models\Semester;
use Livewire\Component;

class CreateExam extends Component
{
    public $departments;
    public $semesters;
    public $states = [];

    public function render()
    {
        $this->departments = Department::all();
        $this->semesters = Semester::all();

        return view('livewire.admin.create-exam');
    }

    public function store(){
        try {
            Exam::create($this->states);
            $this->dispatchBrowserEvent('exam_stored');
            $this->states = [];
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
