@extends('.\Layout.Master')

@section('title', 'Create Applicant')

@section('Content')
    <h1 style="text-align: center; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">Applying as {{$jobs->job_title}} in {{$jobs->users->companies->Nama_Perusahaan}}</h1>
    <h3 style="text-align: center; font-weight:bold; font-size: 20px;">Hope the best for you...</h3>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{route('Applicant.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="">Jobs Name</label>
                <input class="form-control" type="text" value="{{$jobs->job_title}}" readonly>
                <input type="hidden" name="job_id" value="{{$jobs->id}}">
                @error('jobs_name')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">JobSeeker Name</label>
                <input class="form-control" type="text" value="{{ auth()->user()->name }}" readonly>
                <input type="hidden" name="jobseeker_id" value="{{ auth()->user()->id }}">
                @error('applicant_name')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <div class="mb-3">
                    <label for="">Your CV / Resume</label>
                    <input class="form-control" name="Resume" type="file" id="formFile">
                    @error('Resume')
                        <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                    @enderror
                </div>

                <button type='submit'>Submit Your Applicant</button>

            </form>
        </div>
    </div>
@endsection

@include('Style.Login')

<style>
    footer {
       position: fixed;
       bottom: 0;
       width: 100%;
   }
</style>