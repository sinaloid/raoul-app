@extends('template.app')

@section('content')
    <div class="container m-top">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card1 bg-white py-2">
                    <div class="col my-5 text-center">
                        <img width="200px" height="auto" src="{{ asset('assets/img/logo.jpg') }}" />
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-6 mx-auto">
                                <label for="email" class="form-label text-md-end">{{ GoogleTranslate::trans("Adresse email", app()->getLocale()) }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Entrez votre email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6 mx-auto mn-3">
                                <label for="password" class="form-label text-md-end">{{ GoogleTranslate::trans("Mots de passe", app()->getLocale()) }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Entrez votre mot de passe"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        
                                        {{ GoogleTranslate::trans("Connexion", app()->getLocale()) }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ GoogleTranslate::trans("Mots de passe oublié ?", app()->getLocale()) }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
