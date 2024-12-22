@extends('.\Layout.Master')

@section('title', 'Login')

@section('Content')
    <h1 style="text-align: center; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">Welcome to CuyKerja Website</h1>
    <h3 style="text-align: center; font-weight:bold; font-size: 20px;">Log in into your account</h3>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{route('LoginUser')}}" method="post">
                @csrf

                <label for="">Email</label>
                <input class="form-control" type="email" name="email" aria-label="" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Password</label>
                <input class="form-control" type="password" name="password" aria-label="" value="{{old('password')}}">
                @error('password')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <p style="font-weight: bold; text-decoration:underline; margin-bottom: -50px; margin-left: 10px; cursor: pointer; margin-top: 30px;"
                onclick="window.location.href='{{ route('register')}}'">
                Dont have an account?</p>

                <button type='submit'>Login</button>

            </form>
        </div>
    </div>
@endsection

@include('Style.Login')

