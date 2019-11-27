<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * use of Filterable Trait
 */
use App\Filters\Filterable;

class Rssitem extends Model
{
    /**
     * enable the use of Filterable trait
     */
    use Filterable;
        
    /**
     * attributes available to fill
     *
     * @var array
     */
    protected $fillable=['channel', 
                         'channel_link',
                         'guid',
                         'link',
                         'pub_date',
                         'description',
                         'xml'
                        ];

}
