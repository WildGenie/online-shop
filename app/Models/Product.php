<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $requests)
    {

        $query->when($requests['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        });

        $query->when($requests['category'] ?? false, function ($query, $category) {
            $query->join('categories', 'products.category_id', 'categories.id')
                ->where('categories.slug', $category)
                ->select('products.*', 'categories.slug', 'products.slug');
        });

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
