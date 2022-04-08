<?php

namespace Database\Seeders;

use App\Models\Academic\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Session::all() as $session) {
           $session->delete();
        }
        
        Session::create([
            'name'=> '2016-2017',
            'batch_number'=> '1',
        ]);
    }
}
