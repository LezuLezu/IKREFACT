<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalBirdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal')->insert([
            'name' => "Kiwi",
            'species' => "Vogel",
            'breed' => "Gras parkiet",
            'age' => "4 jaar",
            'owner' => "4",
            'image' => "/image/parrakeet.jpg", 
            'description' => "Handtam, kan wat schuw zijn in het begin."
        ]);
        DB::table('animal')->insert([
            'name' => "Buba",
            'species' => "Vogel",
            'breed' => "Geelkuif kaketoe",
            'age' => "15 jaar",
            'owner' => "4",
            'image' => "/image/kaketoe.jpg", 
            'description' => "Handtam, maakt veel geluid."
        ]);
    }
}
