<?php

namespace Database\Factories;

use App\Models\EmployeeProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->name,
            'department_name' => $this->faker->name,
            'job_title'       => $this->faker->name,
        ];
    }
}
