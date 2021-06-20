<?php

namespace Database\Seeders;

use App\Enums\Permission\SystemPermission;
use App\Enums\Role\SystemRole;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSetUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = collect(SystemPermission::toArray())->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });

        $roles = collect(SystemRole::toArray())->map(function ($role) {
            return ['name' => $role, 'guard_name' => 'web'];
        });

        Permission::insert($permissions->toArray());
        Role::insert($roles->toArray());

        foreach (Role::all() as $role) {
            $role->givePermissionTo(SystemPermission::allOf($role->name));
        }
    }
}
