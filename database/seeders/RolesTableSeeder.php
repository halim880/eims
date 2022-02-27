<?php

namespace Database\Seeders;

use App\Helpers\UserRole;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Role::create(['name'=> UserRole::STUDENT]);
        Role::create(['name'=> UserRole::HOSTEL_PROVOST]);
        Role::create(['name'=> UserRole::TEACHER]);
        Role::create(['name'=> UserRole::ADMIN]);
        Role::create(['name'=> UserRole::LIBRARIAN]);
    }
}
