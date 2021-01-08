<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
   
    protected $fillable = [
        'id_product',
        'name',
        'purchase_price',
        'spending',
        'price_finished'
    ];

    protected $primaryKey = 'id_product';   
}


