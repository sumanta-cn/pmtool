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
            'name' => 'soumyajit',
            'email' => 'soumyajit@capitalnumbers.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(100),
            'is_active' => 1,
        ]);
    }
}
