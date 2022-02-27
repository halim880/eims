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
    
    public $department_id;
    public $semester_id;
    public $course_id;
    public $exam_id;
    public $student_id;
    public $obtained_marks;
    public $full_marks;

    public $user_id;

    public $stored_results = [];

    public function render()
    {
        $this->user_id = Auth::user()->id;
        $this->student_ids = Student::pluck('id')->toArray();
        $this->semesters = Semester::all();

        $this->courses = Course::where([
            'semester_id'=> 105,
            'department_id'=> 101,
        ])->get();
        $this->exams = Exam::all();
        $this->departments = Department::all();

        $this->recentEntry();

        return view('livewire.teacher.result.result-entry');
    }

    public function store(){
        try {
            Result::create([
                'student_id'=> $this->student_id,
                'semester_id'=> $this->semester_id,
                'exam_id'=> $this->exam_id,
                'course_id'=> $this->course_id,
                'obtained_marks'=> $this->obtained_marks,
                'full_marks'=> $this->full_marks,
                'stored_by_user_id'=> $this->user_id,
            ]);

            $this->obtained_marks = null;
            $this->dispatchBrowserEvent('result-stored');
            // $this->recentEntry();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('duplicate-entry');
        }
    }

    public function changeFocus(){
        $this->dispatchBrowserEvent('change_fucus_to_obtained_marks');
    }

    private function recentEntry(){
        // $this->recentEntries = ResultView::orderBy('updated_at', 'desc')->limit(3)->get();
    }
}
