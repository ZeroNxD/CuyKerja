@extends('.\Layout.Master')

@section('title', 'AboutUs')

@section('Content')
    <div class="row" style="text-align: center; margin-top: 50px; padding:20px;">
        <div class="col-4">
            <img src="{{asset('assets/Ivan.jpg')}}" alt="" style="width:250px; height:250px; object-fit: cover; border-radius:50%;">
            <h1>Ivan Afrizal</h1>
            <h2>2602175815</h2>
            <h3>BINUS University</h3>
            <h3>Computer Science</h3>
        </div>

        <div class="col-4">
            <img src="{{asset('assets/Kevin.jpg')}}" alt="" style="width:250px; height:250px; object-fit: cover; border-radius:50%;">
            <h1>Kevin Petersen</h1>
            <h2>2602136713</h2>
            <h3>BINUS University</h3>
            <h3>Computer Science</h3>
        </div>

        <div class="col-4">
            <img src="{{asset('assets/Nicholas.jpg')}}" alt="" style="width:250px; height:250px; object-fit: cover; border-radius:50%;">
            <h1>Nicholas Wenderlim</h1>
            <h2>2602144942</h2>
            <h3>BINUS University</h3>
            <h3>Computer Science</h3>
        </div>
    </div>

    <div class="row">
        <h1>Tentang CuyKerja</h1>
    </div>

@endsection