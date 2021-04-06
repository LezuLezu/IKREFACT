<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalDogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal')->insert([
            'name' => "Baxter",
            'species' => "Hond",
            'breed' => "Boxer",
            'age' => "4 jaar",
            'owner' => "2",
            'image' => "/image/boxer.jpg", 
            'description' => "Goed getraint, kent veel trucjes."
        ]);
    }
}
