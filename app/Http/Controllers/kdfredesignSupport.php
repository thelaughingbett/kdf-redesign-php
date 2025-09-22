<?php

namespace App\Http\Controllers;

use App\Models\personell;
use Illuminate\Http\Request;

class kdfredesignSupport extends Controller
{
    public function index(Request $request){
        $personells = personell::all();
        // dd($personells);
        return view('support.index',['personells' => $personells]);
    }

}
