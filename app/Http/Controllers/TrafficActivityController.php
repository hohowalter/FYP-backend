<?php

namespace App\Http\Controllers;

use App\Models\TrafficActivity;
use Illuminate\Http\Request;

class TrafficActivityController extends Controller
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
    public function create(Request $request)
    {
        //
        $request->validate([
            'link_id' => 'required',
            'road_type' => 'required',
            'traffic_speed' => 'required',
        ]);

        $traffic_activity = new TrafficActivity;
        $traffic_activity->link_id = request('link_id');
        $traffic_activity->region = request('region');
        $traffic_activity->road_type = request('road_type');
        $traffic_activity->traffic_speed = request('traffic_speed');
        $traffic_activity->save();
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
     * @param  \App\Models\TrafficActivity  $trafficActivity
     * @return \Illuminate\Http\Response
     */
    public function show(TrafficActivity $trafficActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrafficActivity  $trafficActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(TrafficActivity $trafficActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrafficActivity  $trafficActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrafficActivity $trafficActivity)
    {
        //
        $request->validate([
            'link_id' => 'required',
            'road_type' => 'required',
            'traffic_speed' => 'required',
        ]);

        $trafficActivity->link_id = request('link_id');
        $trafficActivity->region = request('region');
        $trafficActivity->road_type = request('road_type');
        $trafficActivity->traffic_speed = request('traffic_speed');
        $trafficActivity->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrafficActivity  $trafficActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrafficActivity $trafficActivity)
    {
        //
        $trafficActivity->delete();
    }
}
