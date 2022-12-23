<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPagesController extends Controller
{
    public function index()
    {
        return view('whispers');
    }
}
