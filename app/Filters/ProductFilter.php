<?php

namespace App\Filters;

class ProductFilter extends QueryFilter
{

    public function category($category = '')
    {
        return
            $this->builder->when($category, function ($query, $category) {
                $query->join('categories', 'products.category_id', 'categories.id')
                    ->where('categories.slug', $category)
                    ->select('products.*', 'categories.slug', 'products.slug');
            });
    }

    public function search($search = '')
    {
        return
            $this->builder->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
            });
    }

    public function sort($sort = '')
    {
        return
            $this->builder->when($sort, function ($query, $sort) {
                $query->orderBy(stristr($sort, '-', true), explode('-', $sort)[1]);
            });
    }

}
