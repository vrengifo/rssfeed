<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * Build a query filter using Eloquent\Builder
 */
class QueryFilters
{
    /**
     * Request variable
     *
     * @var array
     */
    protected $request;
    
    /**
     * Builder variable
     *
     * @var Builder
     */
    protected $builder;
  
    /**
     * Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
  
    /**
     * Apply the filters 
     * validating if the method is defined or is a parameter 
     * in the request
     *
     * @param Builder $builder
     * @return void
     */
    public function apply(Builder $builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $name => $value) {
            if ( ! method_exists($this, $name)) {
                continue;
            }
            if (strlen($value)) {
                $this->$name($value);
            } else {
                $this->$name();
            }
        }
        return $this->builder;
    }
  
    /**
     * Apply the filters
     *
     * @return void
     */
    public function filters()
    {
        return $this->request->all();
    }
}