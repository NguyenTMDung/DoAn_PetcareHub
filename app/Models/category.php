<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'name' 
    ];
    // public function type_product()
    // {
    //     return $this->hasMany(type_product::class, 'CategoryID');
    // }
}
