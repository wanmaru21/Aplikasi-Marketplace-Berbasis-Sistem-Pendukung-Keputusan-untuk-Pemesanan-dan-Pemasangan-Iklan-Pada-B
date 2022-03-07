<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image" href="images/logo1.png">
    <title>Denpasar Billboard Marketplaces</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
       
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> 
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                @guest
                    <a class="navbar-brand" href="/">
                        <img src="../images/Logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Denpasar Billboard Marketplace
                    </a>
                @else
                    <a class="navbar-brand" href="/vendor">
                        <img class="image rounded-circle" src="{{asset('/storage/images/logo')}}" alt="logo" style="width: 40px;height: 40px; padding: 5px; margin: 0px; ">
                        <img src="../images/Logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Denpasar Billboard Marketplace
                    </a>
                @endif
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login Pelanggan') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 40px;height: 40px; padding: 5px; margin: 0px; ">
                                    Hai, {{ Auth::user()->nama_ven }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{route('vendor.showProfiles',Auth::user()->id)}}">Profil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('vendor.showBillboard')}}">Kelola Billboard</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('vendor.showPenyewaan')}}">Kelola Pesanan</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('vendor.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwlgebS3bplkEr9NEFBhut66Xo-m4muW4"
                async
            ></script>
            <script>
                var myLatLng = { lat: -8.676270, lng: 115.186033 }
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: myLatLng,
                    zoom: 15,
                  });
                
                  marker = new google.maps.Marker({
                    position: myLatLng,
                    map,
                    draggable: true,
                    animation: google.maps.Animation.Bounce,
                  });
                google.maps.event.addListener(marker, 'dragend', function (a) {
                    document.getElementById("latbox").value = this.getPosition().lat();
                    document.getElementById("lngbox").value = this.getPosition().lng();
                    console.log(a)
                });

            </script>
        </main>
    </div>
</body>
</html>