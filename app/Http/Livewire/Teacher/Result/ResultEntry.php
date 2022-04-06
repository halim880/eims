<?php

namespace App\Http\Livewire\Teacher\Result;

use App\Models\Academic\Course;
use App\Models\Department;
use App\Models\Exam;
use App\Models\Result;
use App\Models\Semester;
use App\Models\Student;
use App\ViewModel\ResultView;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ResultEntry extends Component
{
    public $courses;
    public $departments;
    public $exams;
    public $semesters;

    public $states;

    public $recentEntries = [];
    

    public $user_id;

    public $stored_results = [];

    public $result;

    public function render()
    {
        $this->user_id = Auth::user()->id;
        $this->student_ids = Student::pluck('id')->toArray();
        $this->semesters = Semester::all();

        $this->courses = Auth::user()->teacher->courses;
        $this->exams = Exam::all();
        $this->departments = Department::all();

        $this->recentEntry();

        return view('livewire.teacher.result.result-entry');
    }

    public function store(){
        // dd($this->result);
        try {
            Result::create([
                'student_id'=> $this->result['student_id'],
                'semester_id'=> $this->result['semester_id'],
                'exam_id'=> $this->result['exam_id'],
                'course_id'=> $this->result['course_id'],
                'full_marks'=> $this->result['full_marks'],
                'attendance_marks'=> $this->result['attendance_marks'],
                'term_test_marks'=> $this->result['term_test_marks'],
                'final_marks'=> $this->result['final_marks'],
                'stored_by_user_id'=> $this->user_id,
            ]);

            $this->obtained_marks = null;
            $this->dispatchBrowserEvent('result-stored');
            $this->result['attendance_marks'] = "";
            $this->result['term_test_marks'] = "";
            $this->result['final_marks'] = "";
            // $this->recentEntry();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('duplicate-entry');
            // dd($th);
        }
    }

    public function changeFocus(){
        $this->dispatchBrowserEvent('change_fucus_to_obtained_marks');
    }

    private function recentEntry(){
        // $this->recentEntries = ResultView::orderBy('updated_at', 'desc')->limit(3)->get();
    }
}
