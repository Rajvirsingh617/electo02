<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerAuthcontroller extends Controller
{
    //
    public function register (Request $request){

    //every function return something
    dd($request->all());
    return 'register';
    }
}
