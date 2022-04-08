<?php

namespace Database\Seeders;

use App\Models\Academic\Department;
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
        foreach (Department::all() as $department) {
            $department->delete();
        }
        
        $cse = Department::create([
            'id'=>'1',
            'name' => 'Computer Science & Engineering',
            'short_form' => 'CSE',
        ]);
        $eee = Department::create([
            'id'=>'2',
            'name' => 'Electrical & Electronics Engineering',
            'short_form' => 'EEE',
        ]);
        $cse = Department::create([
            'id'=>'3',
            'name' => 'Civil Engineering',
            'short_form' => 'CE',
        ]);
    }
}
