<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function form_login(){
        return view('welcome');
    }
    public function ok(){
        return view('ok');
    }
}
