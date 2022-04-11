<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'from_latitude' => 'required',
            'from_longtitude' => 'required',
            'to_latitude' => 'required',
            'to_longtitude' => 'required',
        ]);

        $link = new Link;
        $link->from_latitude = request('from_latitude');
        $link->from_longtitude = request('from_longtitude');
        $link->to_latitude = request('to_latitude');
        $link->to_longtitude = request('to_longtitude');
        $link->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
        $request->validate([
            'from_latitude' => 'required',
            'from_longtitude' => 'required',
            'to_latitude' => 'required',
            'to_longtitude' => 'required',
        ]);

        $link->from_latitude = request('from_latitude');
        $link->from_longtitude = request('from_longtitude');
        $link->to_latitude = request('to_latitude');
        $link->to_longtitude = request('to_longtitude');
        $link->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
        $link->delete();
    }
}
