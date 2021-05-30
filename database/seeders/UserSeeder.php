<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = User::create([
            'name'              => 'テスト太郎',
            'email'             => 'super-admin@test.com',
            'password'          => Hash::make('password'),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);

        $role = Role::findByName('super-administrator', 'super-admins');
        $administrator->assignRole($role);
    }
}
