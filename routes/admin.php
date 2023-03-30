<?php

use App\Http\Controllers\admin\admincontroller;
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

Route::get('/admin', function () {
    return "admin";
});
Route::group(['prefix' => 'admin','middleware ' =>'auth'], function()
{
    Route::get('/',[admincontroller ::class,'works']);

    Route::get('hello',[admincontroller ::class,'sayhello']);

});
Route::get('/alaa',[admincontroller ::class,'alaa']);
