<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'active' => 0,
    ];

    public function scopeActive()
    {
        // return Customer::where('active', 1)->get();
        return Customer::where('active', 1)->paginate(15);
    }

    public function scopeInactive()
    {
        // return Customer::where('active', 0)->get();
        return Customer::where('active', 0)->paginate(15);
    }

    public function scopePending()
    {
        // return Customer::where('active', 2)->get();
        return Customer::where('active', 2)->paginate(15);
    }

    /**
     * Get the company that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'Pending',
            3 => 'Black Listed',
        ];
    }

    // public function getActiveAttribute($attribute)
    // {
    //     return $this->activeOptions()[$attribute];
    // }

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }
}
