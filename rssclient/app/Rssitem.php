<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rssitem extends Model
{
    
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
