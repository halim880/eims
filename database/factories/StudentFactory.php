<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Role;
use App\Models\Semester;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        $user->assignRole('student');
        
        return [
            'id'=>$this->studentId(),
            'user_id'=> $user->id,
            'department_id'=> 101,
            'session_id'=> 1,
            'semester_id'=> 108,
            'dob'=> new Carbon('16 Dec 1997'),
            'father_name'=> 'Tajul Islam',
            'mother_name'=> 'Rasheda Khatun',
            'phone'=> '01743920880',
            'current_address'=> 'Mukti judda hall, room 207, Sylhet Engineering college',
            'permanent_address'=> 'Dolura, Bisswambhar pur, Sunamgonj',
        ];
    }

    private function studentId(){
        return "20".rand(10, 21).rand(330, 335).rand(100, 999);
    }
}
