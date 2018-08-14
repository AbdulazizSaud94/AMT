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
       $superAdmin->title = 'super admin';
       $superAdmin->save();
       $superAdmin->roles()->attach($role_super_admin);


       $role_sales_manger = Role::where('name','sales manger')->first();
       $salesManger = new User();
       $salesManger->name = 'sales manger';
       $salesManger->email = 'salesmanger@user.com';
       $salesManger->phone = '0501010101';
       $salesManger->password = Hash::make('ProtectUs-123');
       $salesManger->title = 'Sales Manger';
       $salesManger->save();
       $salesManger->roles()->attach($role_sales_manger);

        $role_general_manger = Role::where('name','general manger')->first();
        $generalManger = new User();
        $generalManger->name = 'general manger';
        $generalManger->email = 'generalmanger@user.com';
        $generalManger->phone = '0510101010';
        $generalManger->password = Hash::make('ProtectUs-123');
        $generalManger->title = 'General Manger';
        $generalManger->save();
        $generalManger->roles()->attach($role_general_manger);

        $role_admin = Role::where('name','admin')->first();
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->phone = '1234123412';
        $admin->password = Hash::make('ProtectUs-123');
        $admin->title = 'Admin';
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
