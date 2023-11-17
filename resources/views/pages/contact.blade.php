@extends('template.app')

@section('script')
    <script src="https://smtpjs.com/v3/smtp.js"></script>
@endsection

@section('page_title')
    Contact
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
            <span class="title-2 importante font-weight-bold text-uppercase ">Adresse et formulaire de contact</span>
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
                            <p class="mb-2">Addresse</p>
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
                            <p class="mb-2">Appelez-nous maintenant</p>
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
                            <p class="mb-2">Envoyez-nous un mail maintenant</p>
                            <h5 class="mb-0">info@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="bg-white rounded p-5">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Contactez nous</p>
                        <h1 class="mb-4">Besoin d'informations ? Alors contactez-nous</h1>
                        <!--p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p-->
                        <form action="{{route("createMessage")}}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="nom">Nom Prenom :</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom et prenom"
                                    id="nom">
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="Entrer votre email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone :</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrer votre email" id="telephone">
                            </div>
                            <div class="form-group">
                                <label for="comment">Commentaire :</label>
                                <textarea class="form-control" name="description" rows="5" id="comment" placeholder="Entrer votre message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
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
