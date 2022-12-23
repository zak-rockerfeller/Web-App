<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nests;

class HomeController extends Controller
{
    public function index()
    {
        $nest_popular = Nests::where('tag', 'Popular')->get();
        $nest_top = Nests::where('tag', 'You')->get();
        $nest_cheap = Nests::where('tag', 'Cheap')->get();
        return view('home', compact('nest_popular', 'nest_top', 'nest_cheap'));
    }
}