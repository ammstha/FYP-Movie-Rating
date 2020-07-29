<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    public function run()
    {
        $superAdmin               = new Role();
        $superAdmin->name         = 'super-admin';
        $superAdmin->description  = 'super-admin';
        $superAdmin->display_name = 'Super Administrator';
        $superAdmin->save();

        $admin               = new Role();
        $admin->name         = 'admin';
        $admin->description  = 'admin';
        $admin->display_name = 'Administrator';
        $admin->save();

        $customer               = new Role();
        $customer ->name         = 'customer';
        $customer ->description  = 'customer';
        $customer ->display_name = 'Customer';
        $customer ->save();
    }
}
