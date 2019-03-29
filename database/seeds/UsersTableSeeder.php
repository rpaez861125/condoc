<?php

use Illuminate\Support\Str;
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
            'name'          => 'Administrador',
            'email'         => 'admin@gmail.com',
            'user'          => 'admin',
            'password'      => bcrypt('admin123'),
            'last_name'     => 'admin',
            'rol'           => 'admin',
            'unity'         => '1',
            'active'        => 'si',
                 
        ]);
        DB::table('users')->insert([
            'name'          => 'Rolando',
            'email'         => 'rpaez@gmail.com',
            'user'          => 'roly',
            'password'      => bcrypt('admin123'),
            'last_name'     => 'Paez Carballo',
            'rol'           => 'secretary',
            'unity'         => '1',
            'active'        => 'si',
                 
        ]);
    }
}
