<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{url('images/ww.JPG')}}" alt="" class="imag">SajiloTeam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Meet Our Team</a>
        </li>
    
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn " type="submit"><i class="bi bi-search"></i></button>
        
      </form>
      <ul class="navbar-nav px-4" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a href="/login"><button class="btn  me-2">Log In</button></a>
        </li>
        <li class="nav-item">
          <a href="{{route('register')}}"><button class="btn">Register</button></a>
        </li>
        
</ul>
    </div>
  </div>
</nav>
