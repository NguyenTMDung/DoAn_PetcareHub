<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected static function boot()
    {
        parent::boot();

        // Sự kiện creating sẽ được gọi trước khi một bản ghi mới được tạo
        static::creating(function ($users) {
            // Kiểm tra nếu trường code chưa được thiết lập
            if (empty($users->code)) {
                // Tạo mã khách hàng tự động
                $users->code = 'KH' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
            }
        });
    }
}
