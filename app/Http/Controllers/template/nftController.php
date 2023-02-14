<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nftController extends Controller
{
    
    public function index()
    {
        return view('frontend.ntf');
    }
}
