<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index')->with('status', 'You are login');
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }
   
}
