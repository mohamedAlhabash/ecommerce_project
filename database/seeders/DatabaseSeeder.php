<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Mindscms\Entrust\Entrust;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([EntrustSeeder::class]);
        $this->call([PermissionSeeder::class]);
        $this->call([ProductCategorySeeder::class]);
    }
}
