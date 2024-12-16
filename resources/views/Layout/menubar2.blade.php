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
          </ul>
      </div>
  
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
  
  </style> 