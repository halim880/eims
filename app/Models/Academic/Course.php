<?php

namespace App\Models\Academic;

use App\Models\Attendance;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpParser\Node\Expr\Cast\Double;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $guarded = [];

    public function teachers(){
        return $this->BelongsToMany(Teacher::class);
    }

    public function semester() : BelongsTo{
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function department() : BelongsTo {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }


    // API 
    public function id(): int {
        return $this->id;
    }

    public function title(): string{
        return $this->title;
    }

    public function code(): string {
        return (string) $this->course_code;
    }

    public function credit() : float {
        return (float) $this->credit;
    }
}
