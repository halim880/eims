<?php

namespace App\Http\Livewire\Student;

use App\Models\Result as ModelsResult;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Result extends Component
{
    public $semesters;
    public $results;
    public $semester_id;

    public function render()
    {
        $this->results = [];
        $this->semesters = Semester::all();
        return view('livewire.student.result');
    }

    public function showResult(int $semester_id){
        $this->results = ModelsResult::where([
            'student_id'=> Auth::user()->student->id,
            'semester_id'=> $semester_id
        ])->get();

        // dd($this->results);
    }
}
