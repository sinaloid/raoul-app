<div class="container-fluid bg-black">
    <div class="row bannier1">
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
                        <span class="d-block text-uppercase">Tél: +226 71 30 29 73 / +1 (832) 406-5684</span>
                        <span class="d-block text-uppercase">Email : aguila.trading.logistics@agtlcargo.com</span>
                        <span class="d-block mb-1 text-uppercase">Whatsapp: +226 71 30 29 73 / +1 (832) 406-5684</span>
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
