<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_activity;

class UserActivityController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'startPoint' => 'required',
            'endPoint' => 'required',
            'from_latitude' => 'required',
            'from_longtitude' => 'required',
            'to_latitude' => 'required',
            'to_longtitude' => 'required',
        ]);

        $user_activity = new User_activity;
        $user_activity->startPoint = request('startPoint');
        $user_activity->endPoint = request('endPoint');
        $user_activity->from_latitude = request('from_latitude');
        $user_activity->from_longtitude = request('from_longtitude');
        $user_activity->to_latitude = request('to_latitude');
        $user_activity->to_longtitude = request('to_longtitude');
        $user_activity->fingerprint = request('fingerprint');;
        $user_activity->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(Request $request, User_activity $user_activity)
    {
        //
        $request->validate([
            'startPoint' => 'required',
            'endPoint' => 'required',
            'from_latitude' => 'required',
            'from_longtitude' => 'required',
            'to_latitude' => 'required',
            'to_longtitude' => 'required',
        ]);

        $user_activity = new User_activity;
        $user_activity->startPoint = request('startPoint');
        $user_activity->endPoint = request('endPoint');
        $user_activity->from_latitude = request('from_latitude');
        $user_activity->from_longtitude = request('from_longtitude');
        $user_activity->to_latitude = request('to_latitude');
        $user_activity->to_longtitude = request('to_longtitude');
        $user_activity->fingerprint = request('fingerprint');;
        $user_activity->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_activity $user_activity)
    {
        //
        $user_activity->delete();
    }
}
