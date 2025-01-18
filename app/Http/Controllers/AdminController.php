<?php
namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\HireJob;
use App\Models\Category;
use App\Models\Applicant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ListUsers(){
        $allhirers = User::with(['roles', 'companies'])->where('roles_id', 2)->paginate(5);
        $alljobseekers = User::with(['roles', 'applications'])->where('roles_id', 1)->paginate(5);

        return view('admin.AdminUsers', compact('allhirers', 'alljobseekers'));
    }

    public function ListJobs(){
        $alljobs = HireJob::with(['users.companies', 'jobtypes', 'categories'])->paginate(5);
        return view('admin.AdminJobs', compact('alljobs'));
    }

    public function DetailJobs($id, Request $request){
        $job = HireJob::with(['users.companies', 'categories', 'jobtypes'])->find($id);

        if($job){
            return view('admin.DetailJob', compact('job'));
        } else {
            abort(404);
        }
    }

    public function ListApplicants(){
        $allapplicants = Applicant::with(['hirejobs', 'users'])->paginate(5);
        return view('admin.AdminApplicants', compact('allapplicants'));
    }

    public function ListCategories(){
        $allcategories = Category::with('hirejobs')->paginate(5);
        return view('admin.AdminCategories', compact('allcategories'));
    }
}