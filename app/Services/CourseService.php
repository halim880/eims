<?php
namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CourseService {
    static function getCoursesByDepartmentAndSemesterID(int $dept_id, int $semester_id) : Collection{
        return DB::table('courses')
                ->where('semester_id', $semester_id)
                ->where('department_id', $dept_id)
                ->get();
    }

    static function getDropCoursesbyStudentId(int $id) : Collection{
        return DB::table('courses')
                ->join('drop_courses', 'drop_courses.course_id', 'courses.id')
                ->where('student_id', $id)
                ->get();
    }
}