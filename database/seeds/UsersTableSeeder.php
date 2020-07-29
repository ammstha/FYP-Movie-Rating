<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $superAdmin     = User::create([
            'name'     => 'Amrit',
            'email'    => 'amritshrestha@gmail.com',
            'slug'      =>'amritshrestha',
            'password' => bcrypt('123456')
        ]);
        $superAdminRole = Role::whereName('super-admin')->first();
        $superAdmin->attachRole($superAdminRole);

        $admin     = User::create([
            'name'     => 'manish',
            'email'    => 'manishkc@gmail.com',
            'slug'      =>'manish',
            'password' => bcrypt('123456')
        ]);
        $adminRole = Role::whereName('admin')->first();
        $admin->attachRole($adminRole);
    }
}
