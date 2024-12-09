<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function ShowPage(){
        return view('Page.SigninPage');
    }
}
