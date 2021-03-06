<nav class="navbar navbar-expand-sm navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{ url('/') }}"><img src="{{ asset('images/logo-unj.png') }}" width=40px heigth=40px alt=""> {{ config('app.name', 'Laravel') }} </a>

      {{-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button> --}}
      <button class="btn btn-link btn-sm text-white" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Begin Your Family Happiness Test') }}" class="nav-link {{ (request()->is('cek')) ? 'active' : '' }}" href="{{ route('cek') }}"><i class="fa fa-edit"></i> Test</a>
            </li>
            <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Family Happiness Province Distribution Map') }}" class="nav-link {{ (request()->is('peta')) ? 'active' : '' }}" href="{{ route('peta') }}"><i class="fa fa-map-marked-alt"></i> Province Maps</a>
            </li>

              <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Family Happiness Regency or City Distribution Map') }}" class="nav-link {{ (request()->is('peta2')) ? 'active' : '' }}" href="{{ route('peta2') }}"><i class="fa fa-map-marked"></i> Regency or City Maps</a>
            </li>
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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-user-circle fa-fw"></i>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/home">Home</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
      </div>
    </nav>
