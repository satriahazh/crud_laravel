<?php

namespace Database\Seeders;

use DB;
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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'isAdmin' => 1, // 1 menandakan admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk guest
        DB::table('users')->insert([
            'name' => 'Satriah Azhari',
            'email' => 'satriah@gmail.com',
            'password' => bcrypt('password'),
            'isAdmin' => 0, //  0 menandakan guest
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
