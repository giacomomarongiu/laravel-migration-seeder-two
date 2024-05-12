<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $trains = Train::all();
        //dd($trains);
        return view('guests.alltrains', compact('trains'));
    }
}
