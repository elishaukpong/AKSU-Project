<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand font-weight-light primary-color" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link primary-color mx-3" href="{{route('about')}}">{{ __('About') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link primary-color mx-3" href="{{route('blog')}}">{{ __('Blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link primary-color mx-3" href="{{route('campuses')}}">{{ __('Campuses') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link primary-color mx-3" href="{{route('contact')}}">{{ __('Contact Us') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link primary-color mx-3" href="{{route('alumni.index')}}">{{ __('Alumni') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle primary-color" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
