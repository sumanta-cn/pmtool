<?php

namespace Database\Seeders;

//use App\Role;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
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
        DB::table('role')->insert([
            'role_name' => 'Admin',
            'role_desc' => 'Development of Projects',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('role')->insert([
            'role_name' => 'Project_Manager',
            'role_desc' => 'Lead of Projects',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('role')->insert([
            'role_name' => 'Developer',
            'role_desc' => 'Development of Projects',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('role')->insert([
            'role_name' => 'Client',
            'role_desc' => 'Proposal of Projects',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        // $admin = new Role();
        // $admin->role_name = 'Admin';
        // $admin->role_desc = 'Manage the Project Tool';
        // $admin->is_active = 1;
        // $admin->save();

        // $pm = new Role();
        // $pm->role_name = 'Project_Manager';
        // $pm->role_desc = 'Manage the Projects and Development team';
        // $pm->is_active = 1;
        // $pm->save();

        // $dev = new Role();
        // $dev->name = 'Web Developer';
        // $dev->save();

        // $user = new Role();
        // $user->name = 'Client';
        // $user->save();
    }
}
