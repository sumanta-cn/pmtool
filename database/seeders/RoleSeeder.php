<?php

namespace Database\Seeders;

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'Admin';
        $admin->save();

        $pm = new Role();
        $pm->name = 'Project-Manager';
        $pm->save();

        $dev = new Role();
        $dev->name = 'Web Developer';
        $dev->save();

        $user = new Role();
        $user->name = 'Client';
        $user->save();
    }
}
