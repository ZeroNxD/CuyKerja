@extends('\Layout.Master2')

@section('title', 'Hirer Home')

@section('Content')

    <div class='None' style="margin-top: 40px; margin-bottom: 40px;">

    </div>

    <div class="UserBox">
        <img src="{{asset('assets/Employer.png')}}" alt="Logo Employer Umum">
        @auth
        <div class="UserInformation">
            <h1>Welcome Hirer,   {{auth()->user()->name}}</h1>
            <h2>Company 🏢 : {{auth()->user()->companies->Nama_Perusahaan}}</h2>
        </div>
        @endauth
    </div>

    <div class="ButtonList">
        <div class="Button1">
            <img src="{{asset('assets/List.png')}}" alt="List Images">
            <button onclick="window.location.href='{{ route('ListJob.index')}}'">See List Job</button>
        </div>
        
        <div class="Button2">
            <img src="{{asset('assets/CreateJob.png')}}" alt="List Images">
            <button onclick="window.location.href='{{ route('ListJob.create')}}'">Create List Job</button>
        </div>
    </div>

    <div class='body'>
        <div class="Quotes">
            <img src="{{asset('assets/HirerHome.jpg')}}" alt="Logo Employer Umum">
            <div class="overlay">
                <h1>Creating opportunities is not just about business growth, it's about building futures and changing lives</h1>
                <h2>with every new hire is a chance to invest in a vision of shared success and prosperity</h2>
            </div>
        </div>
    </div>

    
@endsection

@include('Style.Home2')