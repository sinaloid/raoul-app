@extends('template.app')

@section('page_title')
    Recis
@endsection

@section('content')
    <div class="row bannier">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="col-12 py-5">
                <h1 class="title-1 font-weight-bold text-white pt-2 text-capitalize animate__animated animate__wobble">Les RECIS</h1>
                <span class="title-2 font-weight-bold text-white">Vitrine du cinéma Burkinabè</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto p-3  d-flex flex-wrap">
            <div class="col-12 col-md-4 mb-3 recis-menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName() == 'details') active @endif" href="{{route('details')}}">Recis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName() == 'organisation') active @endif" href="{{route('executif')}}">Comité Exécutif de l'Association</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName() == 'organisation') active @endif" href="{{route('organisation')}}">Comité d'organisation de la première édition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName() == 'partenaires') active @endif" href="{{route('partenaires')}}">Partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName() == 'archives') active @endif" href="{{route('archives')}}">Archives</a>
                    </li>
                    @if (1==2)
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName() == 'autres') active @endif" href="{{route('autres')}}">Autres</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
            <div class="col-12 col-md-8">
                @if (Route::current()->getName() == 'recis')
                    <p>
                        <span><span class="font-weight-bold">Forme Juridique</span> : Association à but non lucratif</span><br>
                        <span><span class="font-weight-bold">Numéro IFU</span> : 00178992P</span><br>
                        <span class="font-weight-bold">Coris Bank</span><br>
                        <span><span class="font-weight-bold">IBAN</span> : BF14 8020 0305 5909 0241 0163</span><br>
                        <span><span class="font-weight-bold">SWIFT</span> : CORIBFBF</span><br>
                    </p>
                @endif
                @if (Route::current()->getName() == 'details')
                    @include('pages.includes.detail')
                @endif
                @if (Route::current()->getName() == 'executif')
                    @include('pages.includes.executif')
                @endif
                @if (Route::current()->getName() == 'organisation')
                    @include('pages.includes.organisation')
                @endif
                @if (Route::current()->getName() == 'partenaires')
                    @include('pages.includes.partenaire')
                @endif
                @if (Route::current()->getName() == 'archives')
                    @include('pages.includes.archive')
                @endif
                @if (Route::current()->getName() == 'autres')
                    @include('pages.includes.autre')
                @endif
            </div>
        </div>
    </div>
@endsection
