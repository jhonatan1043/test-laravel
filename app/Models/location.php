<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table = 'locations';
   
    protected $fillable = [
     'id_location',
     'address',
     'name_responsible'
    ];

    protected $primaryKey = 'id_location';  
}
