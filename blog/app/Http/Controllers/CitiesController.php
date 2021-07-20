<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    //
    public function index()
    {
        $cities = City::All();
        return view('cities.index', compact('cities'));
    }
       
}