<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    use HasFactory;
    protected $table = 'typeProduct';
    
    public function category(){
        return $this->belongsTo(category::class,'category_name');
    }
}
