<?php

use Illuminate\Foundation\Inspiring;

/**
 * adding references
 */
use App\Rssitem;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

/**
 * Command rss:load {url}
 * using the Feed class from dg/rss-php 
 * get the items and load to a table
 * {url} is a rss feed url, it returns a well formed xml-rss
 */
Artisan::command('rss:load {url}', function ($url) {
    try {
        // message of execution
        $this->comment("Executing the loading of ". $url);
        
        // get the information from the url
        $feed = Feed::loadRss($url);
        
        // get the title of the channel and the link of the channel
        $auxChannel = $feed->title;
        $auxChannel_link = $feed->link;
         
        // read the feed
        foreach ($feed->item as $item) {
            
            // create an instance of Rssitem
            $rssitem = new Rssitem();
    
            // set variables from channel
            $rssitem->channel = $auxChannel;
            $rssitem->channel_link = $auxChannel_link;
    
            // set variables for item
            $rssitem->link = $item->link;
            $rssitem->guid = $rssitem->guid;
            $rssitem->pub_date = $item->pubDate;
            $rssitem->description = $item->description;
            $rssitem->xml = $item->asXML();
    
            $rssitem->created_at = Carbon::now();
            $rssitem->updated_at = Carbon::now();
    
            $rssitem->save();
        }
        $this->comment("Command finalized successfully!!");
    } catch (\Exception $e) {
        $this->comment("Command not finalized. ". $e->getMessage());
    }
    
})->describe('Get the content from a RSS feed and store in a table');