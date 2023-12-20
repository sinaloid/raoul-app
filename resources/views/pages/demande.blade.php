@extends('template.app')

@section('page_title')
    Photos
@endsection

@section('content')
@include('carousel')
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 p-3 text-center">
            <span class="title-2 importante font-weight-bold text-uppercase ">{{ $lang[app()->getLocale()]['Formulaire de demande'] }}</span>
        </div>
        <form class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="row mb-5">
                
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 mb-3">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 -{{ $lang[app()->getLocale()]['Informations personnelles'] }}
                        </div>
                        <div class="form-group">
                            <label for="name">{{ $lang[app()->getLocale()]['Nom prénom'] }} :</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre nom et prénom'] }}"
                                id="name">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">{{ $lang[app()->getLocale()]["Adresse"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse"] }}" id="entreprise_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ $lang[app()->getLocale()]['Numéro de téléphone'] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre numéro de téléphone'] }}"
                                id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">{{ $lang[app()->getLocale()]['Email'] }}</label>
                            <input type="email" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre adresse mail'] }}"
                                id="email">
                        </div>
                        <div class="form-group">
                            <label for="entreprise"> {{ $lang[app()->getLocale()]['Entreprise'] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre nom de entreprise'] }}"
                                id="entreprise_name">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            2 - {{ $lang[app()->getLocale()]["Informations de l'exportateur"] }}
                        </div>
                        <div class="form-group">
                            <label for="name">{{ $lang[app()->getLocale()]["Nom prénom"] }}:</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le nom et prénom"] }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">{{ $lang[app()->getLocale()]["Adresse"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse"] }}" id="entreprise_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ $lang[app()->getLocale()]["Numéro de téléphone"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le numéro de téléphone"] }}"
                                id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">{{ $lang[app()->getLocale()]["Email"] }}</label>
                            <input type="email" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse mail"] }}" id="email">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">{{ $lang[app()->getLocale()]["CNI ou Passeport"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le numéro du cni ou passeport"] }}" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            3 -{{ $lang[app()->getLocale()]["Informations du receveur"] }}
                        </div>
                        <div class="form-group">
                            <label for="name">{{ $lang[app()->getLocale()]["Nom prénom"] }}:</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer votre nom et prénom"] }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">{{ $lang[app()->getLocale()]["Adresse"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse"] }}" id="entreprise_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ $lang[app()->getLocale()]["Numéro de téléphone"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le numéro de téléphone"] }}"
                                id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">{{ $lang[app()->getLocale()]["Email"] }}</label>
                            <input type="email" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse mail"] }}" id="email">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">{{ $lang[app()->getLocale()]["Pays de destination"] }}</label>
                            <input type="text" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le nom du pays"] }} " />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    <div class="card p-3">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            4 - {{ $lang[app()->getLocale()]["Type d'expédition"] }}
                        </div>
                        <div class="d-flex">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example"
                                    value="customEx">
                                <label class="custom-control-label" for="customRadio">Roro</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                    value="customEx">
                                <label class="custom-control-label" for="customRadio2">Container & Airfreight</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    
                    <div class="card p-3">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            5 - Assurance
                        </div>
                        <div class="d-flex">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example"
                                    value="customEx">
                                <label class="custom-control-label" for="customRadio">{{ $lang[app()->getLocale()]["Oui"] }}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                    value="customEx">
                                <label class="custom-control-label" for="customRadio2">{{ $lang[app()->getLocale()]["Non"] }}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            6 - {{ $lang[app()->getLocale()]["Douane"] }}
                        </div>
                        <div class="form-group">
                            <label for="email">{{ $lang[app()->getLocale()]["Détails"] }} :</label>
                            <input type="email" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer les détails"] }} " id="email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            7 -  {{ $lang[app()->getLocale()]["Commentaire"] }}
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="comment">{{ $lang[app()->getLocale()]["Commentaire"] }} :</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>
@endsection
