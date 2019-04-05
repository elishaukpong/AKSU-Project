<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class NavigationController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }

}
