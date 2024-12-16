<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\HireJob;
use App\Models\JobType;
use Illuminate\Http\Request;


// Tugasnya melakukan handling terhadap data-data yang ingin diberikan konsep CRUD [Create Read Update Delete]
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function ShowPage(){
        $alluser = User::where('roles_id', 2)->with('companies')->get();
        return view('hirer.homepage', compact('alluser'));
    }

    public function index()
    {
        $alljobs = HireJob::with('users.companies')->get();
        return view('hirer.list', compact('alljobs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alltypes = JobType::all();
        $allusers = User::where('roles_id', 2)->with('companies')->get();
        $allcategories = Category::all();
        
        return view('hirer.create', compact('alltypes', 'allusers', 'allcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'types_id' => 'required',
            'categories_id' => 'required',
            'employer_id' => 'required',
            'description' => 'required|string',
            'location' => 'required|string',
            'salary_min' => 'required|numeric',
            'salary_max' => 'required|numeric',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'job_status' => 'required|string',
            'deadline' => 'required|numeric',
        ]);

        if($request->hasFile('logo')){
            $logoPath = $request->file('logo')->store('assets', 'public');
        }

        $job = new HireJob();
        $job->Logo = $logoPath; 
        $job->job_title = $request->input('title');
        $job->types_id = $request->input('types_id');
        $job->categories_id = $request->input('categories_id');
        $job->employer_id = $request->input('employer_id');
        $job->job_description = $request->input('description');
        $job->location = $request->input('location');
        $job->salary_min = $request->input('salary_min');
        $job->salary_max = $request->input('salary_max');
        $job->requirements = $request->input('requirements');
        $job->responsibilities = $request->input('responsibilities');
        $job->status = $request->input('job_status');
        $job->deadline = now()->addDays((int) $request->input('deadline'));
        $job->posted_at = now(); 


        $job->save();

        return redirect()->route('ListJob.index')->with('success', 'New Job has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}