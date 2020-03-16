<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicControlador extends Controller
{
   
    public function index (){
        return view('index');

    }

    public function registrar (){
        return view('registrar');

    }


    public function login_redirect(){
        return redirect()->route('index');
    }


}
