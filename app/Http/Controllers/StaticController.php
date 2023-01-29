<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home(){
        return view('layouts.main');

    }
    public function categories(){
        return view('categories');
    }

    public function sofasarmchairs(){
        return view('layouts.sofas&armchairs');
    }   
    public function storagesysunits(){
        return view('layouts.storagesys&units');
    }   
    public function tableschairs(){
        return view('layouts.tables&chairs');
    }
   
    
    public function login(){
        return view('login'); 
    }
    public function admin(){
        return view('admin.index'); 
    }
    public function user(){
        return view('user'); 
    }

}
