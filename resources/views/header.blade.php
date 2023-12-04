<div class="container-fluid p-0 bg-black">
    <div class="d-flex">
        <div class="ml-3 p-0">
            <a class="navbar-brand py-0" href="{{ route('accueil') }}">
                <img style="width: 160px !important;" src="{{asset('assets/img/logo.jpg')}}" alt="logo recis" />
            </a>
        </div>
        <div class="d-flex align-items-center justify-content-end w-100">
            <div class="d-inline-block mx-4 pl-2 font-weight-bold text-white sm-title-3" style="height: fit-content">
                <span class="d-block text-uppercase">AGTL</span>
                <span class="d-block text-uppercase">Tél: +226 XX XX XX XX</span>
                <span class="d-block text-uppercase">Email : infos@gmail.com</span>
                <span class="d-block mb-1 text-uppercase">Whatsapp: +226 XX XX XX XX</span>
                <select class="form-select changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                </select>
            </div>
        </div>
    </div>
</div>
<header class="sticky-top bg-white">
    <nav class="navbar navbar-expand-lg navbar-white sticky-top">
        <!-- Brand -->
        <a id="ic" class="navbar-brand-2 py-0" href="{{ route('accueil') }}">
            <img src="{{asset('assets/img/logo.jpg')}}" alt="logo AGTL" />
        </a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler custom-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{ route('accueil') }}">{{ GoogleTranslate::trans('accueil', app()->getLocale()) }}</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{ route('nosServices') }}">{{ GoogleTranslate::trans('Services', app()->getLocale()) }}</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{ route('demande') }}">{{ GoogleTranslate::trans('Formulaire de commande', app()->getLocale()) }}</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{ route('contact') }}">{{ GoogleTranslate::trans('Contact', app()->getLocale()) }}</a>
                </li>
                
                @guest
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{ route('login') }}">{{ GoogleTranslate::trans('se connecter', app()->getLocale()) }}</a>
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
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
