<?php

namespace App\Models;

use App\Models\Academic\Course;
use App\Models\Academic\Department;
use App\Traits\UserInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasFactory;
    use UserInfo;
    protected $guarded = [];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public const PROFILE_IMAGE_DIRECTORY = 'public/image/teacher/profile';

    public static function profileImageDirectory(){
        return storage_path(self::PROFILE_IMAGE_DIRECTORY);
    }

    public function id() : int {
        return (int) $this->id;
    }

    public function name() : string {
        return $this->user->name;
    }

    public function gender() : string {
        return $this->gender;
    }

    public function email() : string {
        return (string) $this->user->email;
    }

    public function phone() : string {
        return (string) $this->phone;
    }

    public function fatherName() : string {
        return (string) $this->father_name;
    }

    public function motherName() : string {
        return (string) $this->mother_name;
    }
    public function currentAddress() : string {
        return (string) $this->current_address;
    }
    public function permanentAddress() : string {
        return (string) $this->permanent_address;
    }
}
