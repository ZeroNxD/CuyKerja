<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function ShowPage(){
        $allcategories = Category::all();
        
        return view('Page.CategoriesPage', compact('allcategories'));
    }
}
