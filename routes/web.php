<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\headercn;
use App\Http\Controllers\registercn;


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

Route::get('dashboard', function () {
    return view('admin.dashboard');
});


// route::view('admin.ashboard','dashboard');
route::view('admin/users',[headercn::class,'allusers']);
route::view('/','main');
route ::view('admin/contact','admin.contact');
route::post('contactcn',[headercn::class,'contactcn']);
route::get('fetchcn',[headercn::class,'fetchcn']);



    route::view('welcome','welcome');

route::post('registercn',[registercn::class,'registercn']);
route::view('register','register');


//user login
route::view('login','login');
route::post('logincn',[registercn::class,'logincn']);



