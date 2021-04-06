<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfAnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species_array = ["Kat", "Hond", "Vogel"];

        foreach($species_array as $species){
            DB::table("kind_of_animal")->insert([
                'species' => $species
            ]);
        }
    }
}
