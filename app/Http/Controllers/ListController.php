<?php

namespace App\Http\Controllers;

use App\Models\HireJob;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function ShowPage(){
        $alljobs = HireJob::with('users.companies')->get();
        return view('Page.ListPage', compact('alljobs'));
    }
}
