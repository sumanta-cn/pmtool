<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'admin',
            'email' => 'soumyajitball@gmail.com',
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(100),
            'role_id' => 1,
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'soumyajit',
            'email' => 'soumyajit@capitalnumbers.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(100),
            'is_active' => 0,
            'role_id' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'diptadip',
            'email' => 'diptadip@capitalnumbers.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(100),
            'is_active' => 0,
            'role_id' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'samuel',
            'email' => 'samueldanis@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(100),
            'is_active' => 0,
            'role_id' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
