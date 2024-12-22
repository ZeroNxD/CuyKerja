<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div>
            <img src="{{ asset('assets/Logo_CuyKerja.png')}}" alt="Logo CuyKerja", height="50px">
        </div>
  
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item px-4">
                  <a href="/CuyKerja/Hirer" class="{{request()->is('CuyKerja/Hirer') ? 'nav-link active': 'nav-link fw-bold'}}">Home</a>
              </li>
              <li class="nav-item px-4">
                  <a href="/CuyKerja/Hirer/ListJob" class="{{request()->is('CuyKerja/Hirer/ListJob') ? 'nav-link active': 'nav-link fw-bold'}}">Your Jobs List</a>
              </li>

              <li class="nav-item px-4">
                <a href="/CuyKerja/Hirer/ListApplicant" class="{{request()->is('CuyKerja/Hirer/ListApplicant') ? 'nav-link active': 'nav-link fw-bold'}}">See Applicant List</a>
            </li>
          </ul>
      </div>
    @auth
        <form action="{{route('logout')}}" method='post' class="inline">
            @csrf
            <button type="submit" class="btn custom-login-btn">Logout</button>
        </form>
    @endauth
    </div>
  </nav>
  
  <style>
      .nav-link.active{
          color: #1F72DF !important;
          font-weight:bold !important;
          text-decoration: underline !important; 
      }
  
      .nav-item a {
          margin: 0 25px;
      }
      
      .custom-login-btn {
            border: 2px solid #000000;
            background-color: transparent;
            color: #000000; 
            padding: 10px 20px; 
            font-size: 16px; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: all 0.3s ease; 
            margin: 10px;
            margin-top: 20px;
            margin-left: 20px;
        }

        .custom-login-btn:hover {
            background-color: #54534e; 
            color: white;
        }
  </style> 