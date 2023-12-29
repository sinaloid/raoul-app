<div class="container-fluid bg-black">
    <div class="row">
        <div class="col-12 col-md-10 p-0 col-lg-8 mx-auto text-center">
            <div class="d-flex">
                <div class="ml-3 p-0">
                    <a class="navbar-brand py-0" href="{{ route('accueil') }}">
                        <img style="width: 160px !important;" src="{{ asset('assets/img/logo.jpg') }}" alt="logo recis" />
                    </a>
                </div>
                <div class="d-flex align-items-center justify-content-end w-100">
                    <div class="d-inline-block me-auto mx-4 pl-2 font-weight-bold text-white sm-title-3 text-right"
                        style="height: fit-content">
                        <span class="d-block text-uppercase sm-title-1">AGTL</span>
                        <span class="d-block mb-1 text-uppercase">
                            <span>
                                <img width="20px" src="{{asset('assets/img/phone.png')}}" alt="">
                            </span>
                            : +226 71 30 29 73 / +1 (832) 406-5684</span>
                        <span class="d-block mb-1 text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 39 39">
                                <path fill="#00E676"
                                    d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z">
                                </path>
                                <path fill="#FFF"
                                    d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z">
                                </path>
                            </svg> : +226 71 30 29 73 / +1 (832) 406-5684</span>
                        <span class="d-block text-uppercase mb-1">
                            <span><i class="fa fa-envelope fa-xl"></i></span> : aguila.trading.logistics@agtlcargo.com</span>
                        <select class="form-select changeLang">
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>Français
                            </option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<header class="sticky-top bg-white">
    <nav class="navbar navbar-expand-lg navbar-white sticky-top">
        <!-- Brand -->
        <a id="ic" class="navbar-brand-2 py-0" href="{{ route('accueil') }}">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo AGTL" />
        </a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler custom-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item pr-5">
                    <a class="nav-link" href="{{ route('accueil') }}">{{ $lang[app()->getLocale()]['accueil'] }}</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link" href="{{ route('nosServices') }}">{{ $lang[app()->getLocale()]['service'] }}</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link"
                        href="{{ route('demande') }}">{{ $lang[app()->getLocale()]['formulaire'] }}</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link" href="{{ route('contact') }}">{{ $lang[app()->getLocale()]['contact'] }}</a>
                </li>

                @guest
                    <li class="nav-item pr-5">
                        <a class="nav-link" href="{{ route('login') }}">{{ $lang[app()->getLocale()]['connecter'] }}</a>
                    </li>
                    @if (!Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (!Route::has('register'))
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
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin') }}">admin</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                Se déconnecter
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
