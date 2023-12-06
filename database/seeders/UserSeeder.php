<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'name' => 'Administrator',
            'last_name' => '-',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Dian Eka',
            'last_name' => 'Lestari',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('owner'),
            'role' => 'owner',
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Operator',
            'last_name' => '-',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('operator'),
            'role' => 'operator',
            'remember_token' => Str::random(10),
        ]);
    }
}
