<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function ShowPage(){
        return view('Page.RegisterPage');
    }
}
