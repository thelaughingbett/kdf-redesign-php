<?php

namespace App\Http\Controllers;

use App\Models\personell;
use Illuminate\Http\Request;

class kdfredesign extends Controller
{
    public function index(){
    
        return view("index");
    }

    public function contact(){
        return view('contact-us');
    }

    public function history(){
        return view('history');
    }

    public function services(){
        return view('services');
    }

    public function mandate(){
        return view('mandate');
    }

    public function ranks(){
        return view('ranks');
    }
}
