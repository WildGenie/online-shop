<?php

namespace App\Filters;

class PostFilter extends QueryFilter
{
    public function search($search = '')
    {
        return
            $this->builder->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
                });
            });
    }
}
