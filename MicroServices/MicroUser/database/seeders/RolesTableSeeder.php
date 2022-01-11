<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_array = ['Gast', "Admin", "Baasje", "Oppasser"];

        foreach($roles_array as $role){
            DB::table('roles')->insert([
                'role' => $role
            ]);
        }
    }
}

