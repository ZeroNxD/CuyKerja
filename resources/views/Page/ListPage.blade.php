@extends('.\Layout.Master')

@section('title', 'ListPage')

@section('Content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid" style="justify-content: center">
            <form class="d-flex" role="search" method="GET" action="{{ route('job.list') }}">
                <input class="form-control me-2" style="width:500px;" name="search" type="search" placeholder="Search A Job List" aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <div class="listjob">
            <h1>List of Available Jobs</h1>
            @unless(count($alljobs) == 0)
                @foreach ($alljobs as $jobs)
                    <div class="col-12 col-md-6 mb-4">
                        <div class="row align-items-center bg-dark-subtle bg-gradient" style="padding-top: 40px; padding-right:20px; width:1300px; border:1px solid gray;">
                            <div class="overlay col-12 col-md-5">
                                <img src="{{$jobs->Logo ? asset('storage/' . $jobs->Logo) : asset($jobs->Logo)}}" alt="Logo Job" class="img-fluid" style="border-radius:10px;">
                            </div>
                            <div class="textsection col-12 col-md-7">
                                <h2>{{$jobs->job_title}}</h2>
                                <p>{{$jobs->requirements}}</p>
                                <p>📌 {{$jobs->location}}</p>
                                <p>💵: Rp {{$jobs->salary_min}} - Rp {{$jobs->salary_max}}</p>
                                <p>🧑‍💼: {{$jobs->users->name}}</p>
                                <p>🏢: {{$jobs->users->companies->Nama_Perusahaan}}</p>
                                <button onclick="window.location.href='{{ route('detail.job', ['id' => $jobs->id, 'from' => 'list']) }}'">Check Detail</button>
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

<style>
    footer {
       position: fixed;
       bottom: 0;
       width: 100%;
   }
</style>