@extends('.\Layout.Master')

@section('title', 'AboutUs')

@section('Content')

    <div class="AboutCuyKerja" style="margin-top:100px;">
        <h1 style="text-align: center; margin-top:20px; margin-bottom:20px; font-weight: bold;">About CuyKerja</h1>
        <img src="{{ asset('assets/Logo_CuyKerja.png')}}" alt="Logo CuyKerja">
        <p style="font-size: 15px; margin-top: 25px;">CuyKerja is a job portal website which will connecting job seekers with employers. CuyKerja allows you to search about the job
            opportunities and also allows you to create a new job vacancy so either employers can find a suitable candidate for their vacant
            and jobseeker can apply the job that are they looking for.
        </p>
    </div>

    <h1 style="text-align: center; margin-top: 20px; font-weight: bold; margin-top:120px;">Meet Our Teams</h1>
    <div class="row" style="text-align: center; margin-top: 10px; padding:20px;">
        <div class="col-4" style="background: #fcfcfc; padding:30px; border-radius:20px;">
            <img src="{{asset('assets/Ivan.jpg')}}" alt="" style="width:250px; height:250px; object-fit: cover; border-radius:50%;">
            <h1 style="font-weight: bold; font-style: italic;">Ivan Afrizal</h1>
            <h2 style="font-size:20px;">2602175815</h2>
            <h3 style='font-size:15px;'>BINUS University</h3>
            <h3 style='font-size:15px;'>Computer Science</h3>
            <h4 style='font-size:20px;'>📧 : @gmail.com </h4>
        </div>

        <div class="col-4" style="background: #fcfcfc; padding:30px; border-radius:20px;">
            <img src="{{asset('assets/Kevin.jpg')}}" alt="" style="width:250px; height:250px; object-fit: cover; border-radius:50%;">
            <h1 style="font-weight: bold; font-style: italic;">Kevin Petersen</h1>
            <h2 style="font-size:20px;">2602136713</h2>
            <h3 style='font-size:15px;'>BINUS University</h3>
            <h3 style='font-size:15px;'>Computer Science</h3>
            <h4 style='font-size:20px;'>📧 : petersenkevin123@gmail.com </h4>
        </div>
        
        <div class="col-4" style="background: #fcfcfc; padding:30px; border-radius:20px;">
            <img src="{{asset('assets/Nicholas.jpg')}}" alt="" style="width:250px; height:250px; object-fit: cover; border-radius:50%;">
            <h1 style="font-weight: bold; font-style: italic;">Nicholas Wenderlim</h1>
            <h2 style="font-size:20px;">2602144942</h2>
            <h3 style='font-size:15px;'>BINUS University</h3>
            <h3 style='font-size:15px;'>Computer Science</h3>
            <h4 style='font-size:20px;'>📧 : @gmail.com </h4>
        </div>
    </div>

@endsection

@include('Style.AboutUs')