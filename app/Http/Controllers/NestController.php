<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nests;

class NestController extends Controller
{
    public function getStudio()
    {
        $studio_nest = Nests::where('type', 'Bedsitter')->get();
        return view('studio', compact('studio_nest'));
    }

        public function getOneBed()
    {
        $one_nest = Nests::where('type', 'One Bedroom')->get();
        return view('one', compact('one_nest'));
    }

        public function getTwoBed()
    {
        $two_nest = Nests::where('type', 'Two Bedroom')->get();
        return view('two', compact('two_nest'));
    }

        public function getThreeBed()
    {
        $three_nest = Nests::where('type', 'Three Bedroom')->get();
        return view('three', compact('three_nest'));
    }

        public function getFourBed()
    {
        $four_nest = Nests::where('type', 'Four Bedroom')->get();
        return view('four', compact('four_nest'));
    }

        public function getForSale()
    {
        $sale_nest = Nests::where('category', 'Sale')->get();
        return view('sale', compact('sale_nest'));
    }

        public function getBabyCare()
    {
        $baby_nest = Nests::where('tag', 'Baby')->get();
        return view('baby', compact('baby_nest'));
    }

        public function getFitness()
    {
        $fit_nest = Nests::where('tag', 'Gym')->get();
        return view('fitness', compact('fit_nest'));
    }

        public function getAirbnb()
    {
        $air_nest = Nests::where('type', 'Airbnb')->get();
        return view('airbnb', compact('air_nest'));
    }

        public function getCamping()
    {
        $camping_nest = Nests::where('type', 'Camping Tent')->get();
        return view('camping', compact('camping_nest'));
    }

        public function getID()
    {
        $id_nest = Nests::where('category', 'Design')->get();
        return view('design', compact('id_nest'));
    }

        public function getHD()
    {
        $hd_nest = Nests::where('type', 'Hotel')->get();
        return view('holiday', compact('hd_nest'));
    }

}
