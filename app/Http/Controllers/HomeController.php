<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data= DB::table('pranchas')->
        select('id', 'user','tamanho')->
        where('user',Auth::user () ->id)->
        get()->toArray();

        return view('home', compact('data'));
    }

    public function store(Request $request)
    {

        dd($request->all());
    }

    public function store_modal(Request $request)
    {
        
        return view('home');
    }

    public function destroy($id)
    {
        return view('home');
    }
    

    
    
}
