<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loan_offers';

    protected $fillable = [
        'name', 'description', 'interest_rate', 'amount', 'terms',
    ];

    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }
}
