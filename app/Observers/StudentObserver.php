<?php

namespace App\Observers;

use App\Events\StudentIsRegisteredEvent;
use App\Mail\StudentRegistrationFormSubmitted;
use App\Models\Application;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class StudentObserver
{
    public function created(Student $student)
    {
        // Application::applyFor($student);
        // Mail::to($student->email)->send(new StudentRegistrationFormSubmitted);
        // event(new StudentIsRegisteredEvent($student));
    }

    /**
     * Handle the Student "updated" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the Student "deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        $student->user->delete();
        @unlink($student->image_path);
    }

    /**
     * Handle the Student "restored" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}
