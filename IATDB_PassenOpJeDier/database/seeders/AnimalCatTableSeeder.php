<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal')->insert([
            'name' => "Mickey",
            'species' => "Kat",
            'breed' => "Maine Coon",
            'age' => "8 maanden",
            'owner' => "1",
            'image' => "/image/barn_kitten.jpg", 
            'description' => "8 maanden oude kitten, moet in de gaten worden gehouden"
        ]);
        DB::table('animal')->insert([
            'name' => "Macey",
            'species' => "Kat",
            'breed' => "Maine Coon",
            'age' => "3 jaar",
            'owner' => "2",
            'image' => "/image/maine_coon.jpg", 
            'description' => "Zeer aanhankelijke haarbal, moet wel dagelijks gekamt worden."
        ]);
        DB::table('animal')->insert([
            'name' => "Spyro",
            'species' => "Kat",
            'breed' => "Ragdoll",
            'age' => "5.5 jaar",
            'owner' => "3",
            'image' => "/image/ragdoll.jpg", 
            'description' => "Speelse jongen, flopt als je hem oppakt"
        ]);
    }
}
