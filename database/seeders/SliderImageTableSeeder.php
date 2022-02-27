<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderImageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('slider_images')->truncate();
        $imgs = ['01.jpg','02.jpg','03.jpg','04.jpg','05.jpg','06.jpg','07.jpg'];
        $i=0;

        foreach ($imgs as $img) {
            DB::table('slider_images')->insert([
                'img'=> $imgs[$i]
            ]);
            $i++;
        }
    }
}
