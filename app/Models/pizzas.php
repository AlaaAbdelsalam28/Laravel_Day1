<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizzas extends Model
{
    use HasFactory;
    
    protected $fillable=[

        "pizza-name",
        "extra",
        "size",
        "price",
        "pic"


    ];
}
