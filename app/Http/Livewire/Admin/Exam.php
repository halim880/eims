<?php

namespace App\Http\Livewire\Admin;

use App\Models\Exam as ModelsExam;
use Livewire\Component;

class Exam extends Component
{
    public $exams;
    public $exam;

    public bool $showDetails = false;

    public function render()
    {
        $this->exams = ModelsExam::orderBy('id', 'desc')->get();
        return view('livewire.admin.exam');
    }

    function show(ModelsExam $exam){
        $this->showDetails = true;
        $this->exam = $exam;
    }

    public function close(){
        $this->showDetails = false;
        $this->exam = null;
    }
}
