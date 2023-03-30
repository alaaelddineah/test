<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
//    this construct using it to implements this middleware on this con trollers
//    public function __construct(){
//        //implements the middleware to all func except alaa().
//        $this->middleware('auth')->except('alaa');
//    }
public function landing(){
    return view('index');
}
    public function sayhello(){
        return "hi alaa";
    }
    public function works(){
        return "hi works";
    }
    public function alaa(){
        return "hi alaa";
    }
}
