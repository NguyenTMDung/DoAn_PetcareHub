<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'id', 'user_id','created_at','updated_at', 'total', 'status', 'name', 'email', 'phone', 'address'
    ];

    protected static function boot()
    {
        parent::boot();

        // Generate UUID before creating the order
        static::creating(function ($order) {
            $order->code = Uuid::uuid4()->toString();
        });
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
