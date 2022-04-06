<?php

namespace App\Http\Livewire\Teacher\Result;

use App\Models\Result;
use App\ViewModel\ResultView;
use Livewire\Component;

class ResultShow extends Component
{
    public $result;

    public $final_marks;
    public $term_test_marks;
    public $attendance_marks;

    public bool $editable = false;

    protected $listeners = [
        'delete_confirmed'=> 'deleteResult', 
        'confirm_delete'=>'confirmDelete'
    ];

    public function render()
    {
        return view('livewire.teacher.result.result-show');
    }

    public function mount(ResultView $result){
        $this->result = $result;
        $this->final_marks = $result->final_marks;
        $this->attendance_marks = $result->attendance_marks;
        $this->term_test_marks = $result->term_test_marks;
    }

    public function edit(){
        $this->editable = true;
    }

    public function update(){
        $result = Result::find($this->result->id);
        $result->final_marks = $this->final_marks;
        $result->attendance_marks = $this->attendance_marks;
        $result->term_test_marks = $this->term_test_marks;
        $result->update();
        $this->editable = false;
        $this->dispatchBrowserEvent('result_updated');
    }

    public function confirmDelete(){
        $this->dispatchBrowserEvent('confirm_delete');
    }

    public function deleteResult(){
        Result::find($this->result->id)->delete();
        $this->dispatchBrowserEvent('result_deleted');
        return redirect()->route('teacher.results.table');
    }
}
