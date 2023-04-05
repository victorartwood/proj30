<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    Protected $guarded = [];

    Protected $attribute = [
        0 => 'Inactive'
    ];

    /**
     * Fetch all active Companies
     *
     * @return active_companies_array
     */
    public function scopeActive()
    {
        $activeCompanies = Company::where('active',1);
        return $activeCompanies;
    }

    /**
     * Fetch all inactive Companies
     *
     * @return inactive_companies_array
     */
    public function scopeInactive()
    {
        $inactiveCompanies = Company::where('active',0);
        return $inactiveCompanies;
    }

    /**
     * Get all of the customer for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customer(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function activeOptions()
    {
        return [
            'Inactive' => 0,
            'Active' => 1,
            'Pending' => 2,
        ];
    }

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }
}
