<nav class="navbar navbar-expand-lg navbar-light shadow-md bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/icon/logo.png') }}" width="150"
                alt=""></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ setActive('home') }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ setActive('main.productos') }}">
                    <a class="nav-link" href="{{ route('main.productos') }}">Productos</a>
                </li>
                @auth
                    @if (auth()->user()->hasRoles([1, 2]))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mystore.home') }}">Administrar</a>
                        </li>
                    @endif
                @endauth
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main.productos') }}">Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main.nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="badge badge-pill badge-dark">
                                <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity() }}
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right cart-notify" aria-labelledby="navbarDropdown"
                            style="width: 450px; padding: 0px; border-color: #9DA0A2;">
                            <ul class="list-group" style="margin: 20px;">
                                @include('partials.cart-drop')
                            </ul>

                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('perfil.index') }}">
                                <i class="fas fa-user"></i> Mi perfil
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-arrow-alt-circle-right"></i> {{ __('Logout') }}
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
