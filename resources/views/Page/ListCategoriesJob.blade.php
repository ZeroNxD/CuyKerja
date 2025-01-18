@extends('.\Layout.Master')

@section('title', $categoriesjob->nama)

@section('Content')

    <a href="{{route('categories.list')}}" style="display: block; text-decoration: none; color: black; font-weight: bold; margin-left: 40px;">< back to categories</a>

    <nav class="navbar bg-body-tertiary">
        <div class="listjob">
            <h1>List of Available Jobs</h1>
            @unless(count($categoriesjob->hirejobs) == 0)
                @foreach ($categoriesjob->hirejobs as $job)
                    <div class="col-12 col-md-6 mb-4">
                        <div class="row align-items-center bg-dark-subtle bg-gradient" style="padding-top: 40px; padding-right:20px; width:1300px; border:1px solid gray;">
                            <div class="overlay col-12 col-md-5">
                                <img src="{{$job->Logo ? asset('storage/' . $job->Logo) : asset($job->Logo)}}" alt="Logo Job" class="img-fluid" style="border-radius:10px;">
                            </div>
                            <div class="textsection col-12 col-md-7">
                                <h2>{{$job->job_title}}</h2>
                                <p>{{$job->requirements}}</p>
                                <p>📌 {{$job->location}}</p>
                                <p>💵: Rp {{$job->salary_min}} - Rp {{$job->salary_max}}
                                <p>🧑‍💼: {{$job->users->name}}</p>
                                <p>🏢: {{$job->users->companies->Nama_Perusahaan}}</p>
                                <button onclick="window.location.href='{{ route('detail.job', ['id' => $job->id, 'from' => 'category']) }}'">Check Detail</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Jobs Available</p>
            @endunless
        </div>
    </nav>
@endsection

@include('Style.List')
