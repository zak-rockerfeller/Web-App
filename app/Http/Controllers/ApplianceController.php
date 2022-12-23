<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nests;

class ApplianceController extends Controller
{
    public function index()
    {
        $featured_nest = Nests::where('category', 'Appliance')->get();
        return view('appliance', compact('featured_nest'));
    }
}
