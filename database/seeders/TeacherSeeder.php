<?php

namespace Database\Seeders;

use App\Helpers\UserRole;
use App\Models\Academic\Course;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $courses = Course::where(['department_id'=> 101, 'semester_id'=> 106])->get();

        $teachers = Teacher::all();

        foreach ($teachers as $teacher) {
            if ($teacher->user) {
                $teacher->user->roles()->detach();
                $teacher->user->delete();
            }
        }

        // Teacher::truncate();

        DB::table('course_teacher')->truncate();

        $images = glob(public_path('image/teacher/*'));
        foreach($images as $image){
            if (file_exists($image)) {
                    unlink($image);
            }
        }

        
        DB::transaction(function(){
            $user = User::create([
                'name'=>'Mr. Emon',
                'email'=>'teacher@gmail.com',
                'password' => Hash::make('password'),
            ]);
    
            Teacher::create([
                'user_id'=> $user->id,
                'nid'=> 202022002022020,
                'father_name'=>'Mr. Halim',
                'mother_name'=>'Mrs. Halim',
                'phone' => '+8801743920880',
                'dob'=> '12-12-99',
                'department_id'=>'102',
                'current_address'=>'Current Address',
                'permanent_address'=>'Parmanent Address',
                'image'=>'',
            ]);

            $user->assignRole(UserRole::TEACHER);
        });
    }
}
