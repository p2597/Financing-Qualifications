<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loan_offers', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name of the loan (e.g., "Personal Loan")
            $table->text('description')->nullable(); // Optional description of the loan
            $table->decimal('interest_rate', 5, 2); // Interest rate with 2 decimal precision (e.g., 5.50%)
            $table->decimal('amount', 15, 2); // Loan amount with 2 decimal precision (e.g., €10,000.00)
            $table->string('terms')->nullable(); // Optional loan terms (e.g., "12 months, 24 months")
            $table->timestamps(); // `created_at` and `updated_at` fields
        });
    
        // Insert predefined loan offers
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
    }
};
