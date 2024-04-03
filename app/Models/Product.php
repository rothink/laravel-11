<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopePriceGreaterThan($query, $amount = 0)
    {
        return $query->where('price', '>', $amount);
    }

    public function scopeCategory($query, $category)
    {
        if ($category) {
            return $query->where('category_id', '=', $category);
        }
    }
}
