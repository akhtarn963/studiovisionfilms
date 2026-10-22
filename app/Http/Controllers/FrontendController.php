<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class FrontendController extends Controller
{
    /* home Paage */
    public function home()
    {
        $banners = Banner::where('page_name', 'home')->get();
        return view('home', compact('banners'));
    }
}
