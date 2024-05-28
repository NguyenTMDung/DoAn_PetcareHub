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
        'id', 'user_id','created_at', 'total', 'status'
    ];

}
