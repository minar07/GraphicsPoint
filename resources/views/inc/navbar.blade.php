<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('welcome') }}">
                <a class="" href="{{ route('welcome') }}"><img src="{{ URL::asset('images/logo.png') }}" alt="Logo" style="width:140px"></a>
                {{-- {{ config('app.name', 'Laravel') }} --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>  {{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Register') }}</a></li>
                        
                        @else
                        @if(Auth::user()->hasRole('admin'))
                        <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users-cog"></i> Users</a></li>
                        <li><a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-users"></i> Role</a></li>
                        <li><a class="nav-link" href="{{ route('gigs.index') }}"><i class="fab fa-algolia"></i></i> Gig</a></li>
                        <li><a class="nav-link" href="{{ route('sliders.index') }}"><i class="fas fa-sliders-h"></i> Slider</a></li>
                        <li><a class="nav-link" href="{{ route('links.index') }}"><i class="fas fa-share-square"></i> Social links </a></li>
                        @endif

                        @if(Auth::user()->hasRole('sub-admin'))
                        <li><a class="nav-link" href="{{ route('gigs.index') }}"><i class="fab fa-algolia"></i></i> Gig</a></li>
                        <li><a class="nav-link" href="{{ route('sliders.index') }}"><i class="fas fa-sliders-h"></i> Slider</a></li>
                        <li><a class="nav-link" href="{{ route('links.index') }}"><i class="fas fa-share-square"></i> Social links </a></li>
                        @endif
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(Auth::user()->hasRole('admin'))
                                <i class="fas fa-user-secret"></i>
                                @elseif(Auth::user()->hasRole('sub-admin'))
                                <i class="fas fa-user-tie"></i>    
                                @else
                                <i class="fas fa-user"></i>
                                @endif
                                   {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
          
            </div>
        </div>
    </nav>