<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion uno a muchos inversa con categories
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
