<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Usuario Administrador',
            'email' => 'admin@laravel.com',
            'age' => '26',
            'gender' => 'Male',
            'password' => Hash::make('qwerty123'),
            'rol_id' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Usuario Regular',
            'email' => 'user@laravel.com',
            'age' => '24',
            'gender' => 'Female',
            'password' => Hash::make('qwerty123'),
            'rol_id' => '2',
        ]);
    }
}
