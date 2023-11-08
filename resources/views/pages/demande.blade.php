@extends('template.app')

@section('page_title')
    Photos
@endsection

@section('content')
    <div class="row bannier">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="col-12 py-5">
                <h1 class="title-1 font-weight-bold text-white pt-2 text-capitalize animate__animated animate__wobble">
                    Lorem ipsum dolor sit amet consectetur adipi
                </h1>
                <span class="title-2 font-weight-bold text-white">amet consectetur adipi</span>
                <p class="text-white">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, laborum illo tempora saepe veniam
                    nobis minima velit est natus voluptatum necessitatibus perspiciatis distinctio vero eveniet veritatis
                    excepturi ullam totam tenetur.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 p-3 text-center">
            <span class="title-2 importante font-weight-bold text-uppercase ">Formulaire de demande</span>
        </div>
        <form class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="row mb-5">
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 - Informations personnel
                        </div>
                        <div class="form-group">
                            <label for="name">Nom prénom:</label>
                            <input type="text" class="form-control" placeholder="Entrer votre nom et prénom"
                                id="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="text" class="form-control" placeholder="Entrer votre numéro de téléphone"
                                id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Entrer votre adresse mail"
                                id="email">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Entreprise</label>
                            <input type="text" class="form-control" placeholder="Entrer votre nom de entreprise"
                                id="entreprise_name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            2 - Informations de l'exportateur
                        </div>
                        <div class="form-group">
                            <label for="name">Nom prénom:</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom et prénom" id="name">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Adresse</label>
                            <input type="text" class="form-control" placeholder="Entrer l'adresse" id="entreprise_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="text" class="form-control" placeholder="Entrer le numéro de téléphone"
                                id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Entrer l'adresse mail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">CNI ou Passeport</label>
                            <input type="text" class="form-control" placeholder="Entrer le numéro du cni ou passeport" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 - Informations du receveur
                        </div>
                        <div class="form-group">
                            <label for="name">Nom prénom:</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom et prénom" id="name">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Adresse</label>
                            <input type="text" class="form-control" placeholder="Entrer l'adresse" id="entreprise_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="text" class="form-control" placeholder="Entrer le numéro de téléphone"
                                id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Entrer l'adresse mail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Pays de destination</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom du pays" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    <div class="card p-3">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 - Type d'expédition
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
                            1 - Assurance
                        </div>
                        <div class="d-flex">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example"
                                    value="customEx">
                                <label class="custom-control-label" for="customRadio">OUI</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                    value="customEx">
                                <label class="custom-control-label" for="customRadio2">NON</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card p-3 ">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 - Douane
                        </div>
                        <div class="form-group">
                            <label for="email">Détails:</label>
                            <input type="email" class="form-control" placeholder="Entrer les détails" id="email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="text-bold border-bottom mb-3 pb-2">
                            1 - Commentaire
                        </div>
                        <div class="form-group">
                            <label for="email">Détails:</label>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>
@endsection
