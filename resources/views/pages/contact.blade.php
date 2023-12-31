@extends('template.app')

@section('script')
    <script src="https://smtpjs.com/v3/smtp.js"></script>
@endsection

@section('page_title')
    Contact
@endsection

@section('content')
@include('carousel')
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 p-3 text-center">
            <span class="title-2 importante font-weight-bold text-uppercase ">{{ GoogleTranslate::trans("Adresse et formulaire de contact", app()->getLocale()) }}</span>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="h-100 bg-white rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">{{ GoogleTranslate::trans("Addresse", app()->getLocale()) }}</p>
                            <h5 class="mb-0">BP XXXX, Bobo-Dioulasso, Burkina Faso</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-white rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">{{ GoogleTranslate::trans("Appelez-nous maintenant", app()->getLocale()) }}</p>
                            <h5 class="mb-0">+226 XX XX XX XX</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-white rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">{{ GoogleTranslate::trans("Envoyez-nous un mail maintenant", app()->getLocale()) }}</p>
                            <h5 class="mb-0">info@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="bg-white rounded p-5">
                        <p class="d-inline-block border rounded-pill py-1 px-4">{{ GoogleTranslate::trans("Contactez nous", app()->getLocale()) }}</p>
                        <h1 class="mb-4">{{ GoogleTranslate::trans("Besoin d'informations ? Alors contactez-nous", app()->getLocale()) }}</h1>
                        <!--p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p-->
                        <form action="{{route("createMessage")}}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="nom">{{ GoogleTranslate::trans("Nom et Prenom", app()->getLocale()) }} :</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom et prenom"
                                    id="nom">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ GoogleTranslate::trans("Adresse Email", app()->getLocale()) }} :</label>
                                <input type="email" name="email" class="form-control" placeholder="Entrer votre email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="telephone">{{ GoogleTranslate::trans("Téléphone", app()->getLocale()) }} :</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrer votre email" id="telephone">
                            </div>
                            <div class="form-group">
                                <label for="comment">{{ GoogleTranslate::trans("Commentaire", app()->getLocale()) }} :</label>
                                <textarea class="form-control" name="description" rows="5" id="comment" placeholder="Entrer votre message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans("Envoyer", app()->getLocale()) }}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="rounded w-100 h-100" frameborder="0" allowfullscreen="" aria-hidden="false"
                            tabindex="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=SNC+(Bobo-Dioulasso)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
