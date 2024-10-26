<?php
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // রোল তৈরি
        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'User']);

        // পারমিশন তৈরি
        Permission::create(['name' => 'view dashboard']);
        Permission::create(['name' => 'edit profile']);
        Permission::create(['name' => 'manage users']);

        // রোলে পারমিশন অ্যাসাইন
        $admin->givePermissionTo(['view dashboard', 'edit profile', 'manage users']);
        $user->givePermissionTo(['view dashboard', 'edit profile']);


        $user = User::find(1);
        $user->assignRole('Admin');

        // দ্বিতীয় ইউজারকে User রোল অ্যাসাইন করুন
        $user = User::find(2);
        $user->assignRole('User');
    }

}








?>