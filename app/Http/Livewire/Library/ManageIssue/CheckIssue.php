<?php

namespace App\Http\Livewire\Library\ManageIssue;

use App\Models\IssueBook;
use App\Models\Student;
use Livewire\Component;

class CheckIssue extends Component
{
    public $student;
    public $issues;
    public $student_id;

    public function render()
    {
        return view('livewire.library.manage-issue.check-issue');
    }

    public function searchIssueByStudentId(){
        $this->student = Student::find($this->student_id);
        $this->issues = IssueBook::where('student_id', $this->student_id)->get();
    }
}
