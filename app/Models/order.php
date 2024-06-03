<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'id', 'user_id','created_at', 'total', 'status'
    ];

    protected static function boot()
    {
        parent::boot();

        // Generate UUID before creating the order
        static::creating(function ($order) {
            $order->order_code = Uuid::uuid4()->toString();
        });
    }
}
