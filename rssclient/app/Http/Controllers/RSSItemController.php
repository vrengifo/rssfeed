<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Use the model Rssitem
 */
use App\Rssitem;

/**
 * Use the filters defined in RssitemFilters
 */
use App\Filters\RssitemFilters;

class RSSItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, RssitemFilters $filters)
    {
        // get the values using the filter
        // to get unread only use: rss?unread_only
        $items = Rssitem::filter($filters)->get();
        return view('index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Rssitem::find($id);

        /*
        if($item) {
            $this->addRssitemRead($id);

            print_r(session('rssitemsread'));
        }
        */

        return view('show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
