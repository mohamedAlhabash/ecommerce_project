<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name'=>'admin','display_name'=>'Adminstrator','description'=>'Adminstrator','allowed_route'=>'admin']);
        $supervisorRole = Role::create(['name'=>'supervisor','display_name'=>'Supervisor','description'=>'supervisor','allowed_route'=>'admin']);
        $customerRole = Role::create(['name'=>'customer','display_name'=>'Customer','description'=>'customer','allowed_route'=>null]);

        $admin = User::create([

        ]);
    }
}
