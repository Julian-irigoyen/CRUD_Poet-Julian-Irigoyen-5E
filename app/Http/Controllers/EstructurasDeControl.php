<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EstructurasDeControl extends Controller
{
    //
    public function login(){
    return view('admon.login');
    }

    public function archivo(){
        return view('archivo');
    }


}
