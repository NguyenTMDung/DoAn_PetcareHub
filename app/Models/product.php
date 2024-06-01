<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{

    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'name', 'pet' ,'typeProduct_name','typeProduct_id', 'price', 'image', 'inventory', 'description'
    ];
    public function typeProduct()
    {
        return $this->belongsTo(Type_Product::class, 'typeProduct_id');
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

}
