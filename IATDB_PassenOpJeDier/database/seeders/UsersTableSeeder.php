<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => "Zoë van Dijk",
            'email' => "s1107714@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_1.jpg', 
            'description' => '20 jarige student, weekje weg op familie bezoek in het buitenland.'
            
       ]);
       DB::table('users')->insert([
            'name' => "Raven Reyes",
            'email' => "reyes.r@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_2.jpg', 
            'description' => '25 jarige monteur, moet voor werk het land uit voor onbepaalde tijd.'
        
        ]);
        DB::table('users')->insert([
            'name' => "Hannah White",
            'email' => "white.h@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_3.jpg', 
            'description' => '29 jarige, stewarddes op een motor yacht, familie kan Spyro niet opvangen helaas.'
            
        ]);
        DB::table('users')->insert([
            'name' => "Meredith Grey",
            'email' => "grey.m@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_4.jpg', 
            'description' => 'We gaan twee weekjes op huwelijksreis.'
            
        ]);
        DB::table('users')->insert([
            'name' => "Callie Torres",
            'email' => "torres.c@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_5.jpg', 
            'description' => 'Wegens blessure kan ik niet werken, wil graag mensen helpen door op hun beestjes te passen'
            
        ]);
        DB::table('users')->insert([
            'name' => "Lexie Grey",
            'email' => "grey.l@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_6.jpg', 
            'description' => 'Op zoek naar gezelschap van beestjes tijdens studeren.' 
        
        ]);
        DB::table('users')->insert([
            'name' => "Alexis Karev",
            'email' => "karev.a@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_7.jpg', 
            'description' => 'Gestopt met school, opzoek naar bijbaantje'
            
        ]);
        DB::table('users')->insert([
            'name' => "Izzie Stevens",
            'email' => "stevens.i@student.hsleiden.nl",
            'password' => bcrypt("Huisdier"),
            'image' => '/image/home_8.jpg', 
            'description' => 'Opzoek naar een nieuwe loopbaan, met dieren.'
            
        ]);
    }
}
