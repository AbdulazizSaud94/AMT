<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = Role::where('name','super admin')->first();
        $superAdmin = new User();
        $superAdmin->name = 'super admin';
        $superAdmin->email = 'superadmin@admin.com';
        $superAdmin->phone = '1324123412';
        $superAdmin->password = Hash::make('ProtectUs-123');
        $superAdmin->title = 'SuperAdmin';
        $superAdmin->save();
        $superAdmin->roles()->attach($role_super_admin);

    }
}
