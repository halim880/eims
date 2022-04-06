<?php

namespace App\Http\Livewire\Student;

use App\Models\Result;
use Livewire\Component;

class ResultShow extends Component
{
    public $results;
    public function render()
    {
        $this->results = [];
        return view('livewire.student.result-show');
    }

    public function mount(int $semester_id){
        $this->results = Result::where([
            'semester_id'=> $semester_id,
        ])->get();
    }
}
