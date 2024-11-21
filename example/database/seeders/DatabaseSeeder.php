<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Seed Employment Types
        \App\Models\EmploymentType::factory(3)->create();

        // Seed Predefined Loan Offers
        DB::table('loan_offers')->insert([
            [
                'name' => 'Personal Loan',
                'description' => 'A flexible loan to cover personal expenses.',
                'interest_rate' => 5.50,
                'amount' => 10000.00,
                'terms' => '12 months, 24 months, 36 months',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Car Loan',
                'description' => 'Finance your dream car with low-interest rates.',
                'interest_rate' => 4.20,
                'amount' => 40000.00,
                'terms' => '24 months, 36 months, 48 months',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Loan',
                'description' => 'Affordable mortgage for your dream home.',
                'interest_rate' => 3.80,
                'amount' => 50000.00,
                'terms' => '120 months, 240 months, 360 months',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed Users
        \App\Models\User::factory(5)->hasLoanApplications(3)->create();
    }
}
