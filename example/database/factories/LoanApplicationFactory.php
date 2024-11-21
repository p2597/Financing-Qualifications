<?php
namespace Database\Factories;

use App\Models\Loan;
use App\Models\LoanApplication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanApplicationFactory extends Factory
{
    protected $model = LoanApplication::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'loan_offer_id' => Loan::inRandomOrder()->first()->id, // Pick a random existing loan offer
            'term' => $this->faker->randomElement(['12 months', '24 months']),
            'is_qualified' => $this->faker->boolean(80), // 80% chance of being qualified
        ];
    }
}
