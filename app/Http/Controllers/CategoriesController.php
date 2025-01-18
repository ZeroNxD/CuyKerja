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
        $categoriesjob = Category::with(['hirejobs' => function($query) {
            $query->where('status', 'Open');
        }, 'hirejobs.users.companies'])->find($id);
        $fromPage = $request->query('from');
        if($categoriesjob){
            return view('Page.ListCategoriesJob', compact('categoriesjob', 'fromPage'));
        } else {
            abort(404);
        }
    }

    public function create(){
        return view('admin.AdminCreateCategories');
    }

    public function store(Request $request){
        $request->validate([
            'Categories_Name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'required|mimes:jpg,jpeg,png',
        ]);

        $logoPath = $request->file('logo')->store('assets', 'public');

        $newcategory = new Category();
        $newcategory->nama = $request->input('Categories_Name');
        $newcategory->descriptions = $request->input('description');
        $newcategory->logo = $logoPath;
        $newcategory->save();

        return redirect()->route('admin.categories')->with('success', 'New Categories has been added');
    }

    public function edit($id){
        $Category = Category::findOrFail($id);
        return view('admin.AdminEditCategories', compact('Category'));
    }

    public function update(Request $request, $id){

        $category = Category::findOrFail($id);

        $request->validate([
            'Categories_Name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'mimes:jpg,jpeg,png',
        ]);

        $category->nama = $request->input('Categories_Name');
        $category->descriptions = $request->input('description');

        if($request->hasFile('logo')){
            $logoPath = $request->file('logo')->store('assets', 'public');
            $category->Logo = $logoPath; 
        }

        $category->save();
        return redirect()->route('admin.categories')->with('success', 'Category updated successfully');
    }

    public function destroy($id){
        $category = Category::find($id);
        
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully');
    }
}
