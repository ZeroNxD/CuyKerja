<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function ShowPage(){
        return view('Page.AboutUsPage');
    }
}
