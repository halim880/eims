<?php

namespace App\Http\Livewire\Teacher\Result;

use App\ViewModel\ResultView;
use Livewire\Component;

class ResultsTable extends Component
{
    public $results;
    public function render()
    {
        $this->results = ResultView::all();
        return view('livewire.teacher.result.results-table');
    }

    public function showresult(ResultView $result){
        return redirect()->route('teacher.result.show', $result);
    }
}
