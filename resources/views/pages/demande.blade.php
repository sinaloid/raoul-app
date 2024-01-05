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
        <form method="POST" action="{{route("createDemande")}}" class="col-12 col-md-10 col-lg-8 mx-auto">
            @csrf
            <div class="row mb-5">
                
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 mb-3">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 -{{ $lang[app()->getLocale()]['Informations personnelles'] }}
                        </div>
                        <div class="form-group">
                            <label for="demandeur_nom">{{ $lang[app()->getLocale()]['Nom prénom'] }} :</label>
                            <input type="text" name="demandeur_nom" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre nom et prénom'] }}"
                                id="demandeur_nom">
                        </div>
                        <div class="form-group">
                            <label for="demandeur_adresse">{{ $lang[app()->getLocale()]["Adresse"] }}</label>
                            <input type="text" name="demandeur_adresse" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse"] }}" id="demandeur_adresse">
                        </div>
                        <div class="form-group">
                            <label for="demandeur_telephone">{{ $lang[app()->getLocale()]['Numéro de téléphone'] }}</label>
                            <input type="text" name="demandeur_telephone" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre numéro de téléphone'] }}"
                                id="demandeur_telephone">
                        </div>
                        <div class="form-group">
                            <label for="demandeur_email">{{ $lang[app()->getLocale()]['Email'] }}</label>
                            <input type="email" name="demandeur_email" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre adresse mail'] }}"
                                id="demandeur_email">
                        </div>
                        <div class="form-group">
                            <label for="demandeur_entreprise"> {{ $lang[app()->getLocale()]['Entreprise'] }}</label>
                            <input type="text" name="demandeur_entreprise" class="form-control" placeholder="{{ $lang[app()->getLocale()]['Entrer votre nom de entreprise'] }}"
                                id="demandeur_entreprise">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            2 - {{ $lang[app()->getLocale()]["Informations de l'exportateur"] }}
                        </div>
                        <div class="form-group">
                            <label for="exportateur_nom">{{ $lang[app()->getLocale()]["Nom prénom"] }}:</label>
                            <input type="text" name="exportateur_nom" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le nom et prénom"] }}" id="exportateur_nom">
                        </div>
                        <div class="form-group">
                            <label for="exportateur_adresse">{{ $lang[app()->getLocale()]["Adresse"] }}</label>
                            <input type="text" name="exportateur_adresse" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse"] }}" id="exportateur_adresse">
                        </div>
                        <div class="form-group">
                            <label for="exportateur_telephone">{{ $lang[app()->getLocale()]["Numéro de téléphone"] }}</label>
                            <input type="text" name="exportateur_telephone" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le numéro de téléphone"] }}"
                                id="exportateur_telephone">
                        </div>
                        <div class="form-group">
                            <label for="exportateur_email">{{ $lang[app()->getLocale()]["Email"] }}</label>
                            <input type="email" name="exportateur_email" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse mail"] }}" id="exportateur_email">
                        </div>
                        <div class="form-group">
                            <label for="exportateur_passport">{{ $lang[app()->getLocale()]["CNI ou Passeport"] }}</label>
                            <input type="text" name="exportateur_passport" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le numéro du cni ou passeport"] }}" id="exportateur_passport" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            3 -{{ $lang[app()->getLocale()]["Informations du receveur"] }}
                        </div>
                        <div class="form-group">
                            <label for="receveur_nom">{{ $lang[app()->getLocale()]["Nom prénom"] }}:</label>
                            <input type="text" name="receveur_nom" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer votre nom et prénom"] }}" id="receveur_nom">
                        </div>
                        <div class="form-group">
                            <label for="receveur_adresse">{{ $lang[app()->getLocale()]["Adresse"] }}</label>
                            <input type="text" name="receveur_adresse" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse"] }}" id="receveur_adresse">
                        </div>
                        <div class="form-group">
                            <label for="receveur_telephone">{{ $lang[app()->getLocale()]["Numéro de téléphone"] }}</label>
                            <input type="text" name="receveur_telephone" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le numéro de téléphone"] }}"
                                id="receveur_telephone">
                        </div>
                        <div class="form-group">
                            <label for="receveur_email">{{ $lang[app()->getLocale()]["Email"] }}</label>
                            <input type="email" name="receveur_email" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer l'adresse mail"] }}" id="receveur_email">
                        </div>
                        <div class="form-group">
                            <label for="receveur_pays">{{ $lang[app()->getLocale()]["Pays de destination"] }}</label>
                            <input type="text" name="receveur_pays" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer le nom du pays"] }}" id="receveur_pays" />
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
                                <input type="radio" name="type_expedition" class="custom-control-input" id="type_expedition1"
                                    value="Roro">
                                <label class="custom-control-label" for="type_expedition1">Roro</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="type_expedition" class="custom-control-input" id="type_expedition2"
                                    value="Container & Airfreight">
                                <label class="custom-control-label" for="type_expedition2">Container & Airfreight</label>
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
                                <input type="radio" name="assurance" class="custom-control-input" id="assurance1"
                                    value="Oui">
                                <label class="custom-control-label" for="assurance1">{{ $lang[app()->getLocale()]["Oui"] }}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="assurance" class="custom-control-input" id="assurance2"
                                    value="Non">
                                <label class="custom-control-label" for="assurance2">{{ $lang[app()->getLocale()]["Non"] }}</label>
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
                            <label for="douane">{{ $lang[app()->getLocale()]["Détails"] }} :</label>
                            <input type="text" name="douane" class="form-control" placeholder="{{ $lang[app()->getLocale()]["Entrer les détails"] }} " id="douane">
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
                                <label for="description">{{ $lang[app()->getLocale()]["Commentaire"] }} :</label>
                                <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>

        </form>


    </div>
@endsection
