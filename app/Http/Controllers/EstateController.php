<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nests;

class EstateController extends Controller
{
    public function index()
    {

        $new_nest = Nests::where('tag', 'New')->get();
        $featured_nest = Nests::where('tag', 'Ngong Hills')->get();
        $top_nest = Nests::where('tag', 'Lovely Homes')->get();
        return view('estate', compact('new_nest', 'top_nest', 'featured_nest'));
    }

   
}
