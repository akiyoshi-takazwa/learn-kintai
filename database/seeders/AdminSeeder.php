<?php

namespace Database\Seeders;

use App\Models\AdminProfile;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminProfile::factory()
            ->count(5)
            ->has(User::factory()->systemSuperAdmin())
            ->create();

        AdminProfile::factory()
            ->count(5)
            ->has(User::factory()->systemAdmin())
            ->create();
    }
}
