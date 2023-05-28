<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['public/vendor/fa/css/all.min.css', 'public/vendor/fa/js/all.min.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Produtos</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Search Bar -->
                    <li class="nav-item me-3">
                            <div class="input-group bg-dark rounded">
                                <input type="search" class="form-control bg-black text-bg-dark border-0" placeholder="Pesquisar Itens" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0 bg-black text-bg-dark" id="search-addon">
                                    <i class="far fa-search"></i>
                                </span>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-fill">
                                <a class="nav-link d-none d-md-block" href="{{ route('login') }}"><i class="far fa-sign-in"></i></a>
                                <a class="nav-link d-md-none" href="{{ route('login') }}">Entrar</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-fill">
                                <a class="nav-link d-none d-md-block" href="{{ route('register') }}"><i class="far fa-user-plus"></i></a>
                                <a class="nav-link d-md-none" href="{{ route('register') }}">Criar Conta</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-bg-dark" href="{{route('myaccount') }}">Minha Conta</a>
                                <a class="dropdown-item text-bg-dark" href="historico-compras">Histórico de Compras</a>
                                <a class="dropdown-item text-bg-dark" href="{{ route('logout') }}"
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
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Links  -->
    <section class="border-top">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-computer-classic me-3"></i>Elite Info
                    </h6>
                    <p>
                        Uma empresa que preza sempre pelo melhor preço e pela qualidade do nosso serviço, da logística, e dos produtos que vendemos.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Principais Marcas
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Intel</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">AMD</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">GeForce</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Radeon</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Links Úteis
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
                    <p><i class="far fa-home me-3"></i>Av. Das Américas, 1483 - Loja C</p>
                    <p>
                        <i class="far fa-envelope me-3"></i>
                        contato@eliteinfo.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> (21) 3401-8794</p>
                    <p><i class="fab fa-whatsapp me-3"></i> (21) 98028-1235</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-top bg-dark">
        <!-- Left -->
        <div class="me-5 d-none d-sm-block">
                © 2023
                <b>Elite Info</b>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="{{env('FACEBOOK_DEFAULT_URL')}}" target="_blank" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{env('TWITTER_DEFAULT_URL')}}" target="_blank" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="{{env('LINKEDIN_DEFAULT_URL')}}" target="_blank" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="{{env('INSTAGRAM_DEFAULT_URL')}}" target="_blank" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <!-- Copyright -->

    <!-- Copyright -->
</footer>
</html>
