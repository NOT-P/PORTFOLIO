<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function resume(){
        return view('frontend.pages.resume');
    }

    public function projects(){
        return view('frontend.pages.projects');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}
