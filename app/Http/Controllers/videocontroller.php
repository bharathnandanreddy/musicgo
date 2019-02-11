<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;
use App\user;

class videocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {    
        $videos=video::inRandomOrder()->paginate(10);
        
        return view('home',compact('videos'));
    }

 
        public function contact()
    {
        
        return view('contact');
    }
}
