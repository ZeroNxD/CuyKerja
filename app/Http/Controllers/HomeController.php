<?php

namespace App\Http\Controllers;

use App\Models\HireJob;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ShowPage(){
        $alljobs = HireJob::with('users.companies')->paginate(4);
        return view('Page.HomePage', compact('alljobs'));
    }

}
