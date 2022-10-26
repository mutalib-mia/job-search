<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function blog(){
        return view('frontEnd.blog.blog');
    }
    public function blogDetails(){
        return view('frontEnd.blog.blog-details');
    }



}
