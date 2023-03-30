<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome')->with(['string'=>'alaa ahmad ','age'=>22]);
});
////optional params
//Route::get('/test1/{id?}', function () {
//    return "welcome";
//});
Route::resource('News','App\Http\Controllers\NewController');
Route::get('landing',[\App\Http\Controllers\admin\admincontroller::class,'landing']);

Route::get('/about',function(){
    return view('index');
});
Route::get('/getdata',[\App\Http\Controllers\NewController::class,'getdata']);

Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
