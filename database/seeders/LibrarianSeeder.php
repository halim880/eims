<?php

namespace Database\Seeders;

use App\Helpers\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=> 'Kamrul Hasan',
            'email'=> 'librarian@gmail.com',
            'password'=> bcrypt('password'),
        ]);

        $admin->assignRole(UserRole::LIBRARIAN);
    }
}
