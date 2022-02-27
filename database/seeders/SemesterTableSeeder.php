<?php

namespace Database\Seeders;

use App\Models\Semester;
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
            [ 'id'=> 101, 'name'=> '1st year 1st semester', 'short_form'=>'1/1'],
            [ 'id'=> 102, 'name'=> '1st year 2nd semester', 'short_form'=>'1/2'],
            [ 'id'=> 103, 'name'=> '2nd year 1st semester', 'short_form'=>'2/1'],
            [ 'id'=> 104, 'name'=> '2nd year 2nd semester', 'short_form'=>'2/2'],
            [ 'id'=> 105, 'name'=> '3rd year 1st semester', 'short_form'=>'3/1'],
            [ 'id'=> 106, 'name'=> '3rd year 2nd semester', 'short_form'=>'3/2'],
            [ 'id'=> 107, 'name'=> '4th year 1st semester', 'short_form'=>'4/1'],
            [ 'id'=> 108, 'name'=> '4th year 2nd semester', 'short_form'=>'4/2'],
        ];

        $id = 101;
        foreach ($semesters as $semester) {
            Semester::create([
                'id'=> $semester['id'],
                'name'=> $semester['name'],
                'short_form'=> $semester['short_form'],
            ]);
            $id++;
        }
    }
}
