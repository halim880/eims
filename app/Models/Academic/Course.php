<?php

namespace App\Models\Academic;

use App\Models\Attendance;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $guarded = [];

    public function teachers(){
        return $this->BelongsToMany(Teacher::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
