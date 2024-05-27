<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{

    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'name', 'pet' ,'typeProduct_name', 'price', 'image', 'inventory', 'description'
    ];
    public function typeProduct(){
        return $this->belongsTo(type_product::class,'typeProduct_name');
    }

}
