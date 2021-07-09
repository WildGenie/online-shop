<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSort() {
        return [
            ['url' => 'stars-desc', 'name' => 'Best Selling'],
            ['url' => 'title-asc', 'name' => 'Alphabetically, A-Z'],
            ['url' => 'title-desc', 'name' => 'Alphabetically, Z-A'],
            ['url' => 'price-asc', 'name' => 'Price, low to high'],
            ['url' => 'price-desc', 'name' => 'Price, high to low'],
            ['url' => 'created_at-desc', 'name' => 'Date, new to old'],
            ['url' => 'created_at-asc', 'name' => 'Date, old to new']
        ];
    }

    public function scopeColor() {
        return ['red', 'green', 'blue', 'yellow', 'white', 'gold', 'gray', 'magenta', 'maroon', 'navy'];
    }

}
