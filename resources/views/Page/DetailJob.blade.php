@extends('.\Layout.Master')

@section('title', $job->job_title)

@section('Content')

    <a href="{{ $fromPage == 'list' ? route('job.list') : ($fromPage == 'category' ? route('categories.job', ['id' => $job->categories_id]) : route('home')) }}" 
    style="display: block; text-decoration: none; color: black; font-weight: bold; margin-left: 40px;">
    < Back to {{ $fromPage == 'list' ? 'List' : ($fromPage == 'category' ? 'Category' : 'Home') }}
    </a>

    @if($errors->any())
        <div class="alert alert-danger" style="margin-top: 20px;">
            @foreach($errors->all() as $error)
                <h1 style="font-weight: bold; font-size: 20px; margin-left: 20px;">{{ $error }}</h1>
            @endforeach
        </div>
    @endif

    <div class="detailjob">
        <div class="details2">
            <img src="{{$job->Logo ? asset('storage/' . $job->Logo) : asset($job->Logo)}}" alt="Logo Job">
            <h1>{{$job->job_title}}</h1>
            <h2>📌: {{$job->location}}</h2>
            <h2>💵 : Rp.{{$job->salary_min}} - Rp.{{$job->salary_max}}</h2>
            <h2>🧑‍💼 : {{$job->users->name}}</h2>
            <h2>🏢 : {{$job->users->companies->Nama_Perusahaan}}</h2>
            <h2>Category : {{$job->categories->nama}}</h2>
            <h2>Type Job : {{$job->jobtypes->Type_Name}}</h2>
        </div>

        <h2 style="font-size: 30px; font-weight: bold; margin-top: 20px; font-style: italic;">Description: </h2>
        <p>{{$job->job_description}}</p>
        <h2 style="font-size: 30px; font-weight: bold; margin-top: 20px; font-style: italic;">Requirements: </h2>
        <p>{{$job->requirements}}</p>
        <h2 style="font-size: 30px; font-weight: bold; margin-top: 20px; font-style: italic;">Responsibilities: </h2>
        <p>{{$job->responsibilities}}</p>
        <form action="{{ route('Applicant.create', ['job_id' => $job->id]) }}" method="GET" style="margin-top: 20px;">
            <button type='submit'>Apply Now</button>
        </form>
        
    </div>

@endsection

@include('Style.Detail')