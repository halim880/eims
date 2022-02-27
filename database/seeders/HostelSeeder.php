<?php

namespace Database\Seeders;

use App\Helpers\UserRole;
use App\Models\Hostel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Hostel::all() as $hostel) {
            $hostel->delete();
        }

        $hostel = Hostel::create([
            'name'=> "Muktijuddha Hall",
            'phone'=> "+8801743920880",
            'address'=> "Alortal Road, Tilagor, Sylhet",
            'total_room'=> 40,
            'total_sit'=> 120,
        ]);

        $user = User::create([
            'name'=> "Test Provost",
            'email'=> "provost@gmail.com",
            'password'=> bcrypt('password'),
        ]);
        DB::table('provosts')->insert([
            'user_id'=> $user->id,
            'hostel_id'=> $hostel->id,
            'designation'=> "Provost",
        ]);
        $user->assignRole(UserRole::HOSTEL_PROVOST);
    }
}
