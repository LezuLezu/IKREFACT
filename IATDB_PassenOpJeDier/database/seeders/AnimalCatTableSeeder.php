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
        ]);
    }
}
