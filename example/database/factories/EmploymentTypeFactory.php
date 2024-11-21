<?php

namespace Database\Factories;

use App\Models\EmploymentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmploymentTypeFactory extends Factory
{
    protected $model = EmploymentType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Full-time', 'Part-time', 'Unemployed']),
        ];
    }
}
