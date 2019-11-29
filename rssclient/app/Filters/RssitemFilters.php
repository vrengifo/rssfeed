<?php

namespace App\Filters;

use App\Rssitem;
use Illuminate\Http\Request;
use Carbon\Carbon;

/**
 * RssitemFilters class
 * Implement the filters required in order to apply when the request is executed
 */
class RssitemFilters extends QueryFilters
{
    /**
     * request variable
     *
     * @var array
     */
    protected $request;

    /**
     * Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    /**
     * get the unread items 
     * using the session variable rssitemsReaded
     *
     * @param [type] $value
     * @return void
     */
    public function unread_only($value = null) {
        // filtering few examples
        // the idea is collect the data from a session variable 
        // adding every item when shows the full data
        return $this->builder->whereNotIn('id',[1,2,3]);
    }

    /**
     * Sort the results 
     * using created_at field
     *
     * @param [type] $type
     * @return void
     */
    public function sort($type = null) {
        return $this->builder->orderBy('created_at', (!$type || $type == 'asc') ? 'asc' : 'desc');
    }

    /**
     * filter the results using the description field
     *
     * @param [type] $term
     * @return void
     */
    public function description($term) {
        return $this->builder->where('rssitems.description', 'LIKE', "%$term%");
    }

}