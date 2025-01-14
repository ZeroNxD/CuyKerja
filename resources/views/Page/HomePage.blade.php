@extends('.\Layout.Master')

@section('title', 'HomePage')

@section('Content')
<div class="main">
    <div class="image-container">
        <img src="{{ asset('assets/BannerHome.jpg')}}" alt="Description of Image"/>
        <div class="overlay">
            <h1>The Gateaway to Your Next Opportunity</h1>
            <p>Your career start with us with thousand of jobs available</p>
            <p></p>
            <button class="btn explore-btn" onclick="window.location.href='#'">Explore Now</button>
        </div>
    </div>


    <div class="LookingJob">
        <div class="row align-items-center">
            <div class="overlay col-4">
                <img src="{{ asset('assets/LookingJob.jpg')}}" alt="Looking for a Job" class="img-fluid" style="border-radius:10px;">
            </div>
            <div class="textsection col-7">
                <h1>Are you looking for a job??</h1>
                <h3>Click On Button Below to Check the Available Job List that match with your skills!</h3>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-dark" onclick="window.location.href='/CuyKerja/List'">See List Job</button>
                </div>
            </div>
        </div>
    </div>

    <div class="CategoryJobs">
        <div class="row align-items-center">
            <div class="textsection col-7">
                <h1>Let's take a look into the provided job categories</h1>
                <h3>Click On Button Below to check the job categories list!</h3>
                <div class="d-flex">
                    <button class="btn btn-dark" onclick="window.location.href='/CuyKerja/Categories'">See List of Job Categories</button>
                </div>
            </div>
            <div class="overlay col-4">
                <img src="{{ asset('assets/CategoriesJob.jpg')}}" alt="Looking for a Job" class="img-fluid" style="border-radius:10px;">
            </div>
        </div>
    </div>

    <div class="featurejob">
        <h1>Recents Job</h1>
        <div class="row">
            @unless (count($alljobs) == 0)
                @foreach ($alljobs as $jobs)
                    <div class="col-12 col-md-6 mb-4">
                        <div class="row align-items-center" style="padding-top: 40px; padding-right:20px">
                            <div class="overlay col-12 col-md-5">
                                <img src="{{$jobs->Logo ? asset('storage/' . $jobs->Logo) : asset($jobs->Logo)}}" alt="Logo Job" class="img-fluid" style="border-radius:10px;">
                            </div>
                            <div class="textsection col-12 col-md-7">
                                <h2>{{$jobs->job_title}}</h2>
                                <p>{{$jobs->requirements}}</p>
                                <p>📌 {{$jobs->location}}</p>
                                <p>Salary Range: Rp {{$jobs->salary_min}} - Rp {{$jobs->salary_max}}</p>
                                <p>Hirer: {{$jobs->users->name}}</p>
                                <p>Companies: {{$jobs->users->companies->Nama_Perusahaan}}</p>
                                <button onclick="window.location.href='{{ route('detail.job', ['id' => $jobs->id, 'from' => 'home']) }}'">Check Detail</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Jobs Available</p>
            @endunless
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $alljobs->links() }} 
    </div>

    <div class="aboutus">
        <img src="{{asset('assets/AboutUsBanner.jpg')}}" alt="">
        <div class="overlay">
            <h1>Meet CuyKerja's teams of developer</h1>
            <p>know more about CuyKerja by inside and outside</p>
            <p></p>
            <button class="btn explore-btn" onclick="window.location.href='/CuyKerja/AboutUs'">See Our Teams</button>
        </div>
    </div>
</div>



@endsection

@include('Style.Home')

<style>
    footer {
       position: fixed;
       bottom: 0;
       width: 100%;
   }
</style>
