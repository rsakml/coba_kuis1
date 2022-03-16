<?php

namespace App\Http\Controllers;
//update
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about')
                ->with('title', 'About');
    }
}
