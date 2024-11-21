<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'employment_type_id', 'annual_salary',
    ];

    // Relationships
    public function employmentType()
    {
        return $this->belongsTo(EmploymentType::class);
    }

    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }
}
