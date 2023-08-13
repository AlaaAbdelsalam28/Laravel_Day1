<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function pizzas()
{
    return $this->belongsToMany(pizzas::class, 'tag_pizzas', 'tag_id', 'pizza_id');
}
}
