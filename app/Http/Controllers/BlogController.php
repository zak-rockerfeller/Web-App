<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nest;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs');
    }

    public function getNestBlog0()
    {
        return view('nest_blog_0');
    }
    
    public function getNestBlogTravel()
    {
        return view('travel_tips');
    }
}
