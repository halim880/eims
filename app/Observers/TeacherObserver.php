<?php

namespace App\Observers;

use App\Mail\TeacherSignupFormRecievedMail;
use App\Models\Application;
use App\Models\Teacher;
use Illuminate\Support\Facades\Mail;

class TeacherObserver
{
    public function created(Teacher $teacher){
        Application::applyFor($teacher);
        Mail::to($teacher->email)->send(new TeacherSignupFormRecievedMail());
    }
    
    public function deleted(Teacher $teacher)
    {
        $teacher->user->delete();
        @unlink($teacher->image_path);
    }

}
