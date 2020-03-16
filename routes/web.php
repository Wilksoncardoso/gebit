<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\prancha;
use PhpParser\Node\Stmt\Return_;
//url publico 

Route::get('/', 'PublicControlador@index')->name('index');
Route::get('/registrar', 'PublicControlador@registrar')->name('registrar');
Route::get('/login', 'PublicControlador@login_redirect')->name('login');



Route::get("/logout", function(){
Auth::logout();
return redirect('/');
});



Auth::routes();


//url privado

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('home.store');
Route::post('/home', 'ModalController@store')->name('modal.store.up'); // cad modal
Route::post('/home', 'ModalController@prancha_add_viagem')->name('modal.store.viagem'); // cad modal

 
// cadastrar
Route::delete('/home/{id}', 'HomeController@destroy')->name('home.destroy'); //deletar






