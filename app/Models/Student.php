<?php

namespace App\Models;

use App\Models\Academic\Course;
use App\Models\Academic\Session;
use App\Traits\UserInfo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Self_;

class Student extends Model
{
    use UserInfo;
    use HasFactory;
    protected $guarded = [];

    public const PROFILE_IMAGE_DIRECTORY = 'public/image/student/profile';

    public static function profileImageDirectory(){
        return storage_path(self::PROFILE_IMAGE_DIRECTORY);
    } 

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function session(){
        return $this->belongsTo(Session::class);
    }

    public function coursesList(){
        return Course::where([
            'semester_id'=>$this->semester_id,
            'department_id'=>$this->department_id,
        ])->get();
    }

    public function coursesForRegistration(int $semester_id) : Collection {
        return Course::where([
            'semester_id'=>$semester_id,
            'department_id'=>$this->department_id,
        ])->get();
    }

    public function getSemesterNameAttribute(){
        return $this->semester->name;
    }
    public function getApplicationStatusAttribute(){
        return Application::where(['type'=> __CLASS__, 'type_id'=> $this->id])->first()->status;
    }

    public function apply(){
        Application::create([
            'type'=> 'student',
            'type_id'=> $this->id,
        ]);
    }

    public function getAttendances($course_id){
        return Attendance::where([
            'course_id'=> $course_id,
            'session'=> $this->session,
        ])->get();
    }

    public function isAdmitted($semester_id):bool{
        $count = DB::table('semester_admissions')->where([
            'student_id'=> $this->id,
            'semester_id'=> $semester_id,
        ])->get()->count();

        if($count<1) return false;
        return true;
    }
}
