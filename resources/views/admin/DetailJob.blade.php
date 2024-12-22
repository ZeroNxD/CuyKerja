@extends('\Layout.Master3')

@section('content')
    <button class="button" onclick="window.location.href='{{route('admin.jobs')}}'">Back to Job List</button>
    <h1 style="font-weight: bold; margin-bottom: 20px; text-decoration: underline;">Jobs Detail - {{$job->job_title}}</h1>
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

        <h2 style="font-size: 30px; font-weight: bold; margin-top: 20px; font-style: italic;">Job's Description: </h2>
        <p>{{$job->job_description}}</p>
        <h2 style="font-size: 30px; font-weight: bold; margin-top: 20px; font-style: italic;">Job's Requirements: </h2>
        <p>{{$job->requirements}}</p>
        <h2 style="font-size: 30px; font-weight: bold; margin-top: 20px; font-style: italic;">Job's Responsibilities: </h2>
        <p>{{$job->responsibilities}}</p>
    </div>

@endsection

@include('Style.AdminDetail')