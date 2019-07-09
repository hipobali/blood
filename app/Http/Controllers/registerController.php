<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function getRegister(){
        return view('register');
    }
    public function getLogin(){
        return view('login');
    }
}
