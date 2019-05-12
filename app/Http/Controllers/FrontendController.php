<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        return view('welcome');
    }
    public  function  About()
    {
        return view('about');
    }
    public  function Contact()
    {
        return view('contact');
    }

}
