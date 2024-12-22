@extends('.\Layout.Master')

@section('title', 'Register')

@section('Content')
    <h1 style="text-align: center; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">Welcome to CuyKerja Website</h1>
    <h3 style="text-align: center; font-weight:bold; font-size: 20px;">Let's Register Your Self into CuyKerja</h3>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{route ('StoreUser')}}" method="post">
                @csrf
                  
                <label for="">Username</label>
                <input class="form-control" type="text" name="name" aria-label="" value="{{old('name')}}">
                @error('name')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

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

                <label for="">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" aria-label="" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <div class="mb-3">
                    <label for="" style="margin-bottom: 20px;">Select Your Role</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="roles_id" value="1" id="jobseeker" style="border: 2px solid black;" onclick="toggleCompanySelection()">
                        <label class="form-check-label" for="jobseeker">Jobseeker</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="roles_id" value="2" id="hirer" style="border: 2px solid black;" required onclick="toggleCompanySelection()">
                        <label class="form-check-label" for="hirer">Hirer/Employer</label>
                    </div>
                </div>
                
                <label for="companies_id" id="companies_label" style="display: none;">Your Companies</label>

                <select name="companies_id" id="companies_id" style="display: none;">
                    @foreach($allcompanies as $option)
                        <option value="{{ $option->id }}">{{ $option->Nama_Perusahaan }}</option>
                    @endforeach
                </select>

                <label for="add_company_text" id="add_company_text" style="display: none;">
                    If your company doesn't contain from list, add from button below.
                </label>

                <a href="{{ route('addCompanyForm') }}" id="add_company_link" style="display: none;">
                    Add Your Company
                </a>

                <p style="font-weight: bold; text-decoration:underline; margin-bottom: -10px; margin-left: 10px; cursor: pointer;"
                onclick="window.location.href='{{ route('login')}}'">
                Already have an account?</p>

                <button type='submit'>Register</button>
            </form>
        </div>
    </div>
@endsection

@include('Style.Register')

<script>
    function toggleCompanySelection() {
        var hirerRadio = document.getElementById('hirer');
        var companySelect = document.getElementById('companies_id');
        var companiesLabel = document.getElementById('companies_label');
        var addCompanyText = document.getElementById('add_company_text');
        var addCompanyLink = document.getElementById('add_company_link');

        if (hirerRadio.checked) {
            companySelect.style.display = 'block';
            companiesLabel.style.display = 'block';
            addCompanyText.style.display = 'block';
            addCompanyLink.style.display = 'block';
        } else {
            companySelect.style.display = 'none';
            companiesLabel.style.display = 'none';
            addCompanyText.style.display = 'none';
            addCompanyLink.style.display = 'none';
        }
    }
    window.onload = toggleCompanySelection;
</script>
