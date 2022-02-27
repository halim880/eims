<?php

namespace Database\Seeders;

use App\Helpers\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) {
            $user->delete();
        }

        $admin = User::create([
            'name'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('password'),
        ]);

        $admin->assignRole(UserRole::ADMIN);
    }
}


