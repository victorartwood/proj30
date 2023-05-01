<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'active' => 1,
    ];

    /**
     * Get the service that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Get the customer that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function scopeActive()
    {
        $activePayment = Payment::where('active', 1)->get();
        return $activePayment;
    }

    public function scopeInactive()
    {
        $inactivePayment = Payment::where('active', 0)->get();
        return $inactivePayment;
    }

    public function scopeUnconfirmed()
    {
        $unconfirmedPayment = Payment::where('active', 2)->get();
        return $unconfirmedPayment;
    }

    public function activeOptions()
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'Unconfirmed',
        ];
    }

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }
}
