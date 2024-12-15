<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function ShowPage(Request $request){
        $search = $request->input('search');

        if($search){
            $allcategories = Category::with('hirejobs.users.companies')->where('nama', 'like', "%{$search}%")
            ->orWhere('descriptions', 'like', "%{$search}%")->get();
        } else {
            $allcategories = Category::with('hirejobs.users.companies')->get();
        }
        
        return view('Page.CategoriesPage', compact('allcategories'));
    }

    public function ListJob($id, Request $request){
        $categoriesjob = Category::with('hirejobs.users.companies')->find($id);
        $fromPage = $request->query('from');
        if($categoriesjob){
            return view('Page.ListCategoriesJob', compact('categoriesjob', 'fromPage'));
        } else {
            abort(404);
        }
    }
}
