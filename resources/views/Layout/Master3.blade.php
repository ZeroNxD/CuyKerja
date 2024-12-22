<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: auto;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px; 
            flex-shrink: 0; 
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .sidebar a.active {
            background-color: #495057;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar button{
            color: #fff;
            text-decoration: none;
            padding: 5px 15px;
            display: block;
            width: 230px;
            height: 40px;
            text-align: left;
        }

        .sidebar button:hover{
            background-color: #495057;
        }

        body, html {
            height: 115%; /* Menyeting tinggi body dan html menjadi 100% dari layar */
            margin: 0;
        }

        .container-fluid {
            display: flex;         
            flex-direction: row;   
            height: 110%;         
        }

        .row {
            display: flex;
            flex: 1;               
        }

    </style>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="col-md-3 col-lg-2 sidebar">
                <div class="text-center mb-4">
                    <img src="{{asset('assets\Profile.png')}}" alt="" style="border-radius: 50%; margin-bottom: 20px;">
                    <h5 style="font-weight: bold">{{ auth()->user()->name ?? 'Admin' }}</h5>
                    <p class="small">{{ auth()->user()->email ?? 'admin@example.com' }}</p>
                </div>
                <a href="{{route('admin.users')}}" class="{{ Route::is('admin.users') ? 'active' : '' }}">List Users</a>
                <a href="{{route('admin.jobs')}}" class="{{ Route::is('admin.jobs') ? 'active' : '' }}">List Jobs</a>
                <a href="{{route('admin.applicants')}}" class="{{ Route::is('admin.applicants') ? 'active' : '' }}">List Applicants</a>
                <a href="{{route('admin.categories')}}" class="{{ Route::is('admin.categories') ? 'active' : '' }}">List Categories</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link text-white" style="text-decoration: none;">Logout</button>
                </form>
            </div>

            <div class="col-md-9 col-lg-10">
                <div class="p-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
