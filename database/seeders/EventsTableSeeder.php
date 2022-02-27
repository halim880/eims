<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        Event::truncate();
        $images = glob(public_path('material/image/event/*'));
        foreach($images as $image){
            if (is_file($image)) {
                unlink($image);
            }
        }
        Event::factory(4)->create(['active'=>1]);
    }
}
