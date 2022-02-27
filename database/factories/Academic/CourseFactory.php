<?php

namespace Database\Factories\Academic;

use App\Models\Academic\Course;
use App\Models\Department;
use App\Models\Semester;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        $dept = Department::create(['name'=>'Computer Science and Engineering', 'short_form'=> 'CSE']);
        $semester = Semester::create(['number'=>'7', 'name'=>'1st year 2nd semester', 'short_form'=> '1/2']);

        return [
            'course_code'=> 'CSE701',
            'title'=> 'Computer Programming',
            'department_id'=> $dept->id,
            'semester_id'=> $semester->id,
            'credit'=> 3.00
        ];
    }
}
