<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'order_id', 'message',
    ];

    // Relationships
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
