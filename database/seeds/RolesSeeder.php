<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'rol' => 'admin',
        ]);

        DB::table('roles')->insert([
            'rol' => 'user',
        ]);
    }
}
