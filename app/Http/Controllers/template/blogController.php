<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        return view('frontend.blog');
    }

    
    public function blog()
    {
        return view('frontend.blog-details');
    }
}
