<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceDetail extends Model
{
    protected $fillable = [
        'product_id', 'price',
    ];

    // Relationships
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
