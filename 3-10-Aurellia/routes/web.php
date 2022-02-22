<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function (){
    return view('about', [
        "title" => "About",
        "nama" => "Aurellia Nasywa Rachmania Sigarlaki",
        "email" => "3103120040@student.smktelkom-pwt.sch.id",
        "gambar" => "myphotos.jpg"
    ]);
});

Route::get('/gallery', function(){
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/contact', function(){
    return view('contacts', [
        "title" => "Contacts"
    ]);
});
Route::resource('/contacts', ContactController::class);
   

    Route::resource('users', 'App\Http\Controllers\UserController', ['except' => ['create', 'edit']]);
