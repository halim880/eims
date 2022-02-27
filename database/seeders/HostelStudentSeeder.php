<?php

namespace Database\Seeders;

use App\Models\Hostel;
use App\Models\HostelMember;
use App\Models\Student;
use Illuminate\Database\Seeder;

class HostelStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (HostelMember::all() as $student) {
            Student::find($student->student_id)->delete();
        }

        $students = Student::factory(20)->create();
        $hostel = Hostel::first();

        foreach ($students as $student) {
            HostelMember::create([
                'student_id'=> $student->id,
                'hostel_id'=> $hostel->id,
                'room_no'=> 100* rand(1,5) + rand(1,9),
                'sit_no'=> rand(1000, 9999),
            ]);
        }
    }
}
