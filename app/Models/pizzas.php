<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pizzas extends Model
{
    use HasFactory;


    protected $fillable = [
        "pizza-name",
        "extra",
        "size",
        "price",
        "pic",
        "cat_id",
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_pizzas', 'pizza_id', 'tag_id');
    }

    public static function uploadFile($request, $neededFile)
    {
        $fileName = "pizza_" . time() . '_' . $neededFile->getClientOriginalName();
        $request->file('pic')->storeAs(
            'public/pizzas',
            $fileName
        );
        return $fileName;
    }
}