<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'student')->first();
        if($role==null) Role::create(['name'=> 'student']);

        foreach (Student::all() as $student) {
                if($student->user) {
                $student->user->roles()->detach();
                $student->user->delete();
                $student->delete();
            }
        }

        $images = glob(public_path('image/student/*'));
        foreach($images as $image){
            if (file_exists($image)) {
                unlink($image);
            }
        }

        $this->createHalim();
        $this->createToma();
    }

    public function createHalim(){
        $user = new User;
        $user->name = "Abdul Halim";
        $user->email = "halim@gmail.com";
        $user->password = Hash::make("password");
        $user->save();

        Student::create([
            'id'=> 2016331509,
            'user_id'=> $user->id,
            'department_id'=> 101,
            'session_id'=> 1,
            'semester_id'=> 108,
            'dob'=> Carbon::parse('16-12-1997'),
            'phone'=> '+8801743920880',
            'blood_group'=> 'A+',
            'father_name'=> 'Tajul Islam',
            'mother_name'=> 'Rasheda Khatun',
            'current_address'=> 'Dolura, Bissawmbharpur, Sunamgonj',
            'permanent_address'=> 'same',
        ]);
        $user->assignRole('student');
    }


    public function createToma(){
        $user = new User();
        $user->name = "Toma Banik";
        $user->email = "tomabanik.1997@gmail.com";
        $user->password = Hash::make("password");
        $user->save();

        Student::create([
            'id'=> 2016331530,
            'user_id'=> $user->id,
            'department_id'=> 101,
            'session_id'=> 1,
            'semester_id'=> 108,
            'dob'=> Carbon::parse('16-12-1997'),
            'phone'=> '+8801743920880',
            'blood_group'=> 'A+',
            'father_name'=> 'Binoy Banik',
            'mother_name'=> 'Milon Banik',
            'current_address'=> 'Zia Bazar Road, Kurigram',
            'permanent_address'=> 'same',
        ]);

        $user->assignRole('student');
    }
}


