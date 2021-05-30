<?php

namespace Database\Seeders\Access;

use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // super-admin
        $superAdminRole = Role::findByName('super-administrator', 'super-admins');
        $superAdminRole->givePermissionTo(Arr::pluck(config('user-permission.super-administrator'), 'name'));

        // admin
        $adminRole = Role::findByName('administrator', 'admins');
        $adminRole->givePermissionTo(Arr::pluck(config('user-permission.administrator'), 'name'));

        // super-manager
        $superManagerRole = Role::findByName('super-manager', 'super-managers');
        $superManagerRole->givePermissionTo(Arr::pluck(config('user-permission.super-manager'), 'name'));

        // manager
        $managerRole = Role::findByName('manager', 'managers');
        $managerRole->givePermissionTo(Arr::pluck(config('user-permission.manager'), 'name'));

        // employee
        $employeeRole = Role::findByName('employee', 'employees');
        $employeeRole->givePermissionTo(Arr::pluck(config('user-permission.employee'), 'name'));
    }
}
