<?php

namespace App\Http\Controllers;

use App\Models\HireJob;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allapplicants = Applicant::with(['hirejobs', 'users'])->where('jobseeker_id', Auth::id())->get();

        $alljobs = HireJob::with(['users', 'categories', 'jobtypes', 'applicants'])->get();

        return view('Page.ApplicantHistory', compact('allapplicants', 'alljobs'));
    }

    public function index2(){
        $alljobs = HireJob::where('employer_id', Auth::id())->get();
        $allapplicants = Applicant::with(['users'])->whereIn('job_id', $alljobs->pluck('id'))->get();
        return view('hirer.listapplicant', compact('allapplicants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($job_id)
    {

        $existingApplication = Applicant::where('jobseeker_id', Auth::id())
                                     ->where('job_id', $job_id)
                                     ->where('application_status', 'pending')
                                     ->where('application_status', 'accepted')
                                     ->first();

        if ($existingApplication) {
            return redirect()->back()->withErrors('You have already applied for this job!');
        }

        $jobs = HireJob::with('users.companies')->findOrFail($job_id);

        return view('Page.CreateApplicantForm', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Resume' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        $resumePath = $request->file('Resume')->store('assets', 'public');

        $newapplicant = new Applicant();
        $newapplicant->job_id = $request->input('job_id');
        $newapplicant->jobseeker_id = $request->input('jobseeker_id');
        $newapplicant->resume_path = $resumePath;
        $newapplicant->description = null;
        $newapplicant->application_status = 'pending';
        $newapplicant->save();

        return redirect()->route('Applicant.index')->with('success', 'Your application has been submitted successfully!');
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
        // Hirer
        $Applicant = Applicant::findOrFail($id);
        return view('hirer.editApplicant', compact("Applicant"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Hirer

        $applicant = Applicant::findOrFail($id);

        $request->validate([
            'application_status' => 'required|in:pending,accepted,rejected',
            'description' => 'nullable|string|max:1000',
        ]);

        $applicant->application_status = $request->input('application_status');
        $applicant->description = $request->input('description');

        $applicant->save();
        return redirect()->route('list.applicant.hirer')->with('success', 'Applicant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->route("")->with('success', 'Applicant Has Been Removed!');
    }
}
