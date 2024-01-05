<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliverySchedule extends Model
{
    protected $fillable = [
        'order_id', 'pickup_time', 'status',
    ];

    // Relationships
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
