<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nests;
class FurnitureController extends Controller
{
    public function index()
    {
        $popular_nest = Nests::where('category', 'Furniture')->where('tag', 'Love')->get();
        $featured_nest = Nests::where('category', 'Furniture')->where('tag', 'Home')->get();
        $top_nest = Nests::where('category', 'Furniture')->where('tag', 'Hot')->get();
        return view('furniture', compact('popular_nest', 'top_nest', 'featured_nest'));
    }
}
