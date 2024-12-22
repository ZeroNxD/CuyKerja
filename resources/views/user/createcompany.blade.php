@extends('.\Layout.Master')

@section('title', 'Add Company')

@section('Content')
    <h1 style="text-align: center; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">Add Your Company into CuyKerja</h1>
    <h3 style="text-align: center; font-weight:bold; font-size: 20px;">More Company, More Opportunities</h3>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{ route('storeCompany') }}" method="post">
                @csrf

                <label for="company_name">Company Name</label>
                <input class="form-control" type="text" name="company_name" id="company_name" value="{{ old('company_name') }}">
                @error('company_name')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{ $message }}</p>
                @enderror

                <label for="company_description">Company Description</label>
                <textarea class="form-control" name="company_description" rows="4" placeholder="Enter job description here" aria-label="">{{old('company_description')}}</textarea>
                @error('company_description')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{ $message }}</p>
                @enderror

                <button type="submit" style="margin-top: 30px !important; margin-bottom: 20px !important;">Add Company</button>
            </form>
        </div>
    </div>
@endsection

@include('Style.NewJob')