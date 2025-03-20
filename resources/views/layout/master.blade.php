<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('image/lg.png') }}" alt="Logo" width="50" height="50">
            </a>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @yield('MenuBer')" aria-current="page" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuTam')" href="/tambah">Tamabah Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuPes')" href="/pesanan">Pesanan Kamar</a>
                </li>

                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-Dark" type="submit">Search</button>
                <button class="btn btn-outline-Dark" type="submit">Herdio Saputra 0822 8307 4743</button>
                </form>
            </div>
        </div>     
        
    </nav>
    
    @yield('konten')

    <footer class="fixed-bottom bg-secondary text-white py-2 mt-4 text-center">
        Copyright &copy; Herdio Saputra - 2025
    </footer>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
