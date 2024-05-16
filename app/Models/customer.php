<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'users';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('customer', function ($builder) {
            $builder->where('role', 'customer');
        });

        static::creating(function ($users) {
                $users->code = 'KH' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        });
    }
    
}

