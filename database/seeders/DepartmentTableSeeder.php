<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cse = Department::create([
            'id'=>'101',
            'name' => 'Computer Science & Engineering',
            'short_form' => 'CSE',
        ]);
        $eee = Department::create([
            'id'=>'102',
            'name' => 'Electrical & Electronics Engineering',
            'short_form' => 'EEE',
        ]);
        $cse = Department::create([
            'id'=>'103',
            'name' => 'Civil Engineering',
            'short_form' => 'CE',
        ]);
    }
}
