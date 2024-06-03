<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    protected $fillable = ['order_id', 'product_id', 'num', 'size', 'price', 'rating'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function calculateTotalSoldByProductId($productId)
    {
        $totalSold = OrderDetail::where('product_id', $productId)->sum('num');

        return $totalSold;
    }

    public static function calculateAverageRating($productId)
    {
        return self::where('product_id', $productId)->avg('rating');
    }

    public static function calculateNumRating($productId)
    {
        return self::where('product_id', $productId)->whereNotNull('rating')->count();
    }
}
