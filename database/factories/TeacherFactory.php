<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Role::create(['name'=> 'teacher']);
        
        $user = User::factory()->create([
                'name'=> 'Abdul Halim',
                'email'=> 'teacher@gmail.com',
                'password'=> 'password',
            ]);
        $user->assignRole('teacher');
        return [
            'user_id'=> $user->id,
            'department_id'=> 1,
            'dob'=> '16 Dec 1997',
            'nid'=> '1018731662',
            'father_name'=> 'Tajul Islam',
            'mother_name'=> 'Rasheda Khatun',
            'phone'=> '01743920880',
            'image'=> 'teacher_1018711662.jpg',
            'current_address'=> 'Mukti judda hall, room 207, Sylhet Engineering college',
            'permanent_address'=> 'Dolura, Bisswambhar pur, Sunamgonj',
        ];
    }
}
