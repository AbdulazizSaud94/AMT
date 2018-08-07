<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Sales Manger
       $role_sales_manger = new Role();
       $role_sales_manger->name = 'sales manger';
       $role_sales_manger->description = 'Sales Manger role';
       $role_sales_manger->save();

       //Pre-sales Manger
       $role_pre_sales_manger = new Role();
       $role_pre_sales_manger->name = 'pre-sales manger';
       $role_pre_sales_manger->description = 'Pre-sales Manger role';
       $role_pre_sales_manger->save();

       //Sales Coordinator
       $role_sales_coordinator = new Role();
       $role_sales_coordinator->name = 'sales coordinator';
       $role_sales_coordinator->description = 'Sales Coordinator role';
       $role_sales_coordinator->save();

       //General Manger
       $role_genral_manger = new Role();
       $role_genral_manger->name = 'general manger';
       $role_genral_manger->description = 'General Manger role';
       $role_genral_manger->save();

       //Pre-sales engineer
       $role_pre_sales_engineer = new Role();
       $role_pre_sales_engineer->name = 'pre-sales engineer';
       $role_pre_sales_engineer->description = 'Pre-sales Engineer role';
       $role_pre_sales_engineer->save();

       //Admin
       $role_admin = new Role();
       $role_admin->name = 'admin';
       $role_admin->description = 'The Admin role has most of the privileges';
       $role_admin->save();

       //Super Admin
       $role_super_admin = new Role();
       $role_super_admin->name = 'super admin';
       $role_super_admin->description = 'The Super Admin role has all the privileges';
       $role_super_admin->save();

       //Customer
       $role_customer = new Role();
       $role_customer->name = 'customer';
       $role_customer->description = 'Customer Role can view the price, comment when reject and send a purchase order';
       $role_customer->save();
    }
}
