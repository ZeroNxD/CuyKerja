<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function ShowPage(){
        return view('Page.CategoriesPage');
    }
}
