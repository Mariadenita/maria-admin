<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        return view('slider');
    }
    public function addslider()
    {
        return view('addslider');
    }
    
}
