<?php

namespace App\Http\Livewire\Student;

use App\Models\Academic\Course;
use App\Models\Exam;
use App\Models\RegistrationForm;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Registration extends Component
{
    use WithPagination;
    public $courses;
    public $selectedCourses = [];
    public $semester;
    public $semesters;
    public $states;
    public $student;

    public bool $next = false;

    public function render()
    {
        $this->exams = Exam::all();
        $this->student = Auth::user()->student;
        $this->states['student_id'] = $this->student->id;
        $this->semesters = Semester::all();
        return view('livewire.student.registration');
    }

    public function store(){
        try {
            DB::transaction(function(){
                $form = RegistrationForm::create([
                    'student_id'=> $this->states['student_id'],
                    'semester_id'=> $this->states['semester_id'],
                    'department_id'=> $this->student->department_id,
                    'phone'=> $this->states['phone'],
                    'email'=> $this->states['email'],
                    'current_address'=> $this->states['current_address'],
                    'permanent_address'=> $this->states['permanent_address'],
                    'is_residential'=> $this->states['is_residential'],
                ]);
    
                foreach ($this->selectedCourses as $course) {
                    DB::table('exam_registrations')->insert([
                        'student_id'=> $this->student->id,
                        'semester_id'=> $this->states['semester_id'],
                        'course_id'=> $course['course_id'],
                        'course_code'=> $course['course_code'],
                        'registration_form_id'=> $form->id,
                        'exam_id'=> $this->states['exam_id'],
                    ]);
                }
                $this->dispatchBrowserEvent('application_submitted', $form->id);
            });
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function next(){
        $this->courses = Course::where([
            'department_id'=> $this->student->department_id,
            'semester_id'=> $this->states['semester_id'],
        ])->get();

        $this->next = true;
    }

    public function back(){
        $this->next = false;
    }

    public function addCourse(Course $course){
        $course = [
            'course_id'=> $course->id,
            'course_code'=> $course->course_code,
            'credit'=> $course->credit,
            'type'=> 'regular',
        ];

        $this->selectedCourses[]= $course;
    }

    public function remove(int $index){
        unset($this->selectedCourses[$index]);
    }

    public function change(){
        $this->courses = Course::where([
            'department_id'=> Auth::user()->student->department_id,
            'semester_id'=> $this->semester,
        ])->get();
    }
}
