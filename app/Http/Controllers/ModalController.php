<?php

namespace App\Http\Controllers;

use App\prancha;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class ModalController extends Controller
{

    


public function store(Request $request){

    $validatedData = $request->validate([
        'tamanho' => 'required|max:255',
        'user' => 'required|numeric',
  ]);
    $show = prancha::create($validatedData);

    return redirect('/home')->with('success', 'Show is successfully saved');
}

public function prancha_add_viagem(Request $request, $store){


    $store = \App\viagem::find($store);
    $store->save();
    return redirect()->route('home');

}


}
