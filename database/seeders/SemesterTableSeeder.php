<?php

namespace Database\Seeders;

use App\Models\Academic\Semester;
use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Semester::all() as $semester) {
            $semester->delete();
        }

        $semesters = [
            [ 'id'=> 1001, 'name'=> '1st year 1st semester', 'short_form'=>'1/1'],
            [ 'id'=> 1002, 'name'=> '1st year 2nd semester', 'short_form'=>'1/2'],
            [ 'id'=> 1003, 'name'=> '2nd year 1st semester', 'short_form'=>'2/1'],
            [ 'id'=> 1004, 'name'=> '2nd year 2nd semester', 'short_form'=>'2/2'],
            [ 'id'=> 1005, 'name'=> '3rd year 1st semester', 'short_form'=>'3/1'],
            [ 'id'=> 1006, 'name'=> '3rd year 2nd semester', 'short_form'=>'3/2'],
            [ 'id'=> 1007, 'name'=> '4th year 1st semester', 'short_form'=>'4/1'],
            [ 'id'=> 1008, 'name'=> '4th year 2nd semester', 'short_form'=>'4/2'],
        ];

        $id = 1;
        foreach ($semesters as $semester) {
            Semester::create([
                'id'=> $semester['id'],
                'number'=> $id,
                'name'=> $semester['name'],
                'short_form'=> $semester['short_form'],
            ]);
            $id++;
        }
    }
}
