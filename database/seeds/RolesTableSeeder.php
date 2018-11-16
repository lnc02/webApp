<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
        ]);
        
        DB::table('roles')->insert([
            'name' => 'Gast',
        ]);

        DB::table('roles')->insert([
            'name' => 'Sterilisation',
        ]);

        DB::table('roles')->insert([
            'name' => 'Sterilisation-Admin',
        ]);
    }
}
