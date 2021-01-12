<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table = 'sales';
   
    protected $fillable = [
        'id_sale',
        'id_product',
        'id_location',
        'quantity'
    ];

    protected $primaryKey = 'id_sale';   
}
