<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
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
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_offers');
    }
};
