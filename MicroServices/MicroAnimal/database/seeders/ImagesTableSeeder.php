<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ['barn_cat.jpg', 'barn_kitten.jpg', 'boxer.jpg', 'collie.jpg', 'kaketoe.jpg', 'maine_coon.jpg', 
                        'parrakeet.jpg', 'parrot.jpg', 'ragdoll.jpg', 'shiba.jpg', 'shitzu.jpg', 'default_animal.jpg',
                        'default_home.jpg', 'home_1.jpg', 'home_2.jpg', 'home_3.jpg', 'home_4.jpg', 'home_5.jpg', 
                        'home_6.jpg', 'home_7.jpg', 'home_8.jpg'];

        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/image/' . $image
            ]);
        }
    }
}
