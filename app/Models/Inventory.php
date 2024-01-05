<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'product_id', 'quantity',
    ];

    // Relationships
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
