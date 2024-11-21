<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'loan_offer_id', 'term', 'is_qualified',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_offer_id');
    }
}
