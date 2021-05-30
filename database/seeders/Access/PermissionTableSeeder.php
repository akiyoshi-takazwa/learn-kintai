<?php

namespace Database\Seeders\Access;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = (new Permission())->getTable();

        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        }

        Permission::insert(config('user-permission.super-administrator'));
        Permission::insert(config('user-permission.administrator'));

        Permission::insert(config('user-permission.super-manager'));
        Permission::insert(config('user-permission.manager'));

        Permission::insert(config('user-permission.employee'));

        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
