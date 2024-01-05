<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreAssistant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone',
    ];

    // Relationships (if needed)
}
