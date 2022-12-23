<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nests;

class ServicesController extends Controller
{
    public function index()
    {

        $art_nest = Nests::where('category', 'Design')->where('type', 'Art')->get();
        $featured_housing_nest = Nests::where('category', 'Design')->where('tag', 'Home')->get();
        $interior_housing_nest = Nests::where('category', 'Design')->where('tag', 'null')->get();
        return view('services', compact('art_nest', 'featured_housing_nest', 'interior_housing_nest'));
    }
}
