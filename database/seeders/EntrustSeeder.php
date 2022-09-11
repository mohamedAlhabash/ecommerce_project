<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Str;
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
        $faker = Factory::create();

        $adminRole = Role::create(['name'=>'admin','display_name'=>'Adminstrator','description'=>'Adminstrator','allowed_route'=>'admin']);
        $supervisorRole = Role::create(['name'=>'supervisor','display_name'=>'Supervisor','description'=>'supervisor','allowed_route'=>'admin']);
        $customerRole = Role::create(['name'=>'customer','display_name'=>'Customer','description'=>'customer','allowed_route'=>null]);

        $admin = User::create([
            'first_name'=>'Admin',
            'last_name'=>'System',
            'username'=>'admin',
            'email'=>'admin@test.com',
            'email_verified_at'=>now(),
            'mobile'=>'0599000001',
            'user_image'=>null,
            'status'=>1,
            'password'=>bcrypt('123123123'),
            'remember_token'=>Str::random(10),

        ]);
        $admin->attachRole($adminRole);

        $supervisor = User::create([
            'first_name'=>'Supervisor',
            'last_name'=>'System',
            'username'=>'supervisor',
            'email'=>'supervisor@test.com',
            'email_verified_at'=>now(),
            'mobile'=>'0599000002',
            'user_image'=>null,
            'status'=>1,
            'password'=>bcrypt('123123123'),
            'remember_token'=>Str::random(10),
        ]);
        $supervisor->attachRole($supervisorRole);
        $customer = User::create([
            'first_name'=>'Mohammed',
            'last_name'=>'Wael',
            'username'=>'mohamed',
            'email'=>'mohammed@gmail.com',
            'email_verified_at'=>now(),
            'mobile'=>'0599000003',
            'user_image'=>null,
            'status'=>1,
            'password'=>bcrypt('123123123'),
            'remember_token'=>Str::random(10),
        ]);
        $customer->attachRole($customerRole);
        for($i = 1 ; $i <= 20 ; $i++){
            $random_customer = User::create([
                'first_name'=>$faker->firstName(),
                'last_name'=>$faker->lastName(),
                'username'=>$faker->unique()->userName,
                'email'=>$faker->unique()->email(),
                'email_verified_at'=>now(),
                'mobile'=>'0599'.$faker->unique()->numberBetween(100000,999999),
                'user_image'=>null,
                'status'=>1,
                'password'=>bcrypt('123123123'),
                'remember_token'=>Str::random(10),
            ]);
            $random_customer->attachRole($customerRole);
        }
    }
}
