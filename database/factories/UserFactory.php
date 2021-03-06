<?php

namespace Database\Factories;

use App\Enums\Role\SystemRole;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'             => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'    => Str::random(10),
        ];
    }

    public function systemSuperAdmin()
    {
        return $this->state(function () {
            return [];
        })->afterCreating(function (User $user) {
            $user->assignRole(SystemRole::SYSTEM_SUPER_ADMIN()->getValue());
        });
    }

    public function systemAdmin()
    {
        return $this->state(function () {
            return [];
        })->afterCreating(function (User $user) {
            $user->assignRole(SystemRole::SYSTEM_ADMIN()->getValue());
        });
    }

    public function managementAdmin()
    {
        return $this->state(function () {
            return [];
        })->afterCreating(function (User $user) {
            $user->assignRole(SystemRole::MANAGEMENT_ADMIN()->getValue());
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
