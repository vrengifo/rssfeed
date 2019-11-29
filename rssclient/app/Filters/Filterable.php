<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait to apply the filters
 */
trait Filterable
{
    public function scopeFilter($query, QueryFilters $filters)
    {
        return $filters->apply($query);
    }
}