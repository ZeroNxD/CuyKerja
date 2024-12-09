<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function ShowPage(){
        return view('Page.ListPage');
    }
}
