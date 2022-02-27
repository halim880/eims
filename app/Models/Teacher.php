<?php

namespace App\Models;

use App\Models\Academic\Course;
use App\Traits\UserInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    use UserInfo;
    protected $guarded = [];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public const PROFILE_IMAGE_DIRECTORY = 'public/image/teacher/profile';

    public static function profileImageDirectory(){
        return storage_path(self::PROFILE_IMAGE_DIRECTORY);
    } 
}
