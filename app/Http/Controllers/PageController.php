<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function shop()
    {
        return view('shop');
    }


    // public function index()
    // {
    //     return view('posts.index');
    // }


    public function contact()
    {
        return view('contact');
    }
}
