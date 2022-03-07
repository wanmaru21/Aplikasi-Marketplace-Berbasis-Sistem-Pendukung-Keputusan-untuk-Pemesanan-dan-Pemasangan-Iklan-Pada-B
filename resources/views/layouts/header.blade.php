<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="images/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Denpasar Billboard Marketplace
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Billboard
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Jaya Giri Advertising</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Bali Gen Advertising</a>
          </div>
        </li>
        <a class="nav-item nav-link active" href="https://bit.ly/2ShYIFo">Need Help?<span class="sr-only">(current)</span></a>
      </div>
    </div>
    @guest
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/login">Login<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="/register">Register<span class="sr-only">(current)</span></a>
      </div>        
    @else
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          Hai, {{ Auth::user()->nama_pel }}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('pelanggan.showProfiles',Auth::user()->id)}}">Profil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Keranjang Belanja</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Kelola Pesanan</a>
          <div class="dropdown-divider"></div>
          
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>
  </li>
  @endguest
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</nav>