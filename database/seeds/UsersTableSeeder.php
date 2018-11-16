<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Gierich',
            'first_name' => 'Andreas',
            'email' => 'andi@gmx.de',
            'password' => bcrypt('123456'),
            'fk_roles_id' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Mustermann',
            'first_name' => 'Max',
            'email' => 'max@gmx.de',
            'password' => bcrypt('123456'),
            'fk_roles_id' => '2',
        ]);

        DB::table('users')->insert([
            'name' => 'Yolal',
            'first_name' => 'Zahide',
            'email' => 'zahide@gmx.de',
            'password' => bcrypt('123456'),
            'fk_roles_id' => '3',
        ]);

        DB::table('users')->insert([
            'name' => 'Koopmann',
            'first_name' => 'Ulrich',
            'email' => 'ulrich@gmx.de',
            'password' => bcrypt('123456'),
            'fk_roles_id' => '4',
        ]);
    }
}
