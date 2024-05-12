<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //taking all trains
        //dd(Train::all());
        //$trains = Train::all();

        //taking today date
        $today = now();
        //dd($today);
        $today = $today->toDateString();
        //dd($today);

        //trains filtered by today date
        // wheredate filters the results of my db in the column (1st parameter) with today's date (2nd)
        $today_trains = Train::whereDate('departure_time', $today)->get();
        //dd($today_trains);

        return view('guests/welcome', compact('today_trains'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        //dd($train);
        return view('guests/single', compact('train'));
    }
}
