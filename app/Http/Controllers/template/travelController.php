<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class travelController extends Controller
{
    
    public function index()
    {
        return view('frontend.travel');
    }
}
