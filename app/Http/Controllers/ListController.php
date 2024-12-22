<?php

namespace App\Http\Controllers;

use App\Models\HireJob;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function ShowPage(Request $request){
        $search = $request->input('search');

        if($search){
            $alljobs = HireJob::with('users.companies')->where('job_title', 'like', "%{$search}%")->orWhere('job_description', 'like', "%{$search}%")
            ->orWhere('requirements', 'like', "%{$search}%")->where('status', 'Open')->get();
        } else {
            $alljobs = HireJob::with('users.companies')->where('status', 'Open')->get();
        }

        return view('Page.ListPage', compact('alljobs'));
    }

    public function DetailJob($id, Request $request){
        $job = HireJob::with(['users', 'categories', 'jobtypes', 'applicants'])
        ->find($id);
        
        $fromPage = $request->query('from');

        if($job){
            return view('Page.DetailJob', compact('job', 'fromPage'));
        } else {
            abort(404);
        }
    }
}
