@extends('template.app')

@section('page_title')
    Accueil
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
                <div class="mt-3">
                    <a class="btn btn-recis font-weight-bold" href="{{ '#' }}">Faire une demande</a>
                    <!--a class="btn btn-recis font-weight-bold" href="{{ route('details') }}">RECIS</a-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 p-3 text-center">
            <span class="title-2 importante font-weight-bold text-uppercase">Nos Services</span>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quaerat odio atque nobis rerum
                doloremque modi excepturi corrupti consectetur. Ad exercitationem esse eveniet ipsum eaque, expedita
                nesciunt error. Eaque, reprehenderit!
            </p>
        </div>
        <div class="col-12 col-md-10 col-lg-8 mx-auto  d-flex flex-wrap">
            @foreach (["Ocean, Air Freight & RORO", "Inland Transport", "Warehousing"] as $item)
                <div class="col-12 col-md-4 py-3">

                    <div class="card p-3 w-100" style="height: 100%">
                        <img width="100%" src="{{ 'https://source.unsplash.com/random/800x800/?service=' . $item }}"
                            alt="">

                        <h2 class="sm-title-1 font-weight-bold">{{$item}}</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio debitis illo quod inventore
                            facilis
                            officiis natus et, eum enim nobis dolorem deleniti similique, error, molestias labore optio
                            cumque
                            aspernatur totam!
                        </p>
                        <div>
                            <a class="importante font-weight-bold" href="{{route('detailService')}}">En savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 p-3 text-center">
                            <span class="title-2 importante font-weight-bold text-uppercase">Projections et programmes</span>
                        </div-->
        @if (1 == 2)
            <div class="col-12 col-md-10 col-lg-8 mx-auto p-3  d-flex flex-wrap">
                <div class="col-12 col-lg-4">
                    <img width="100%" src="{{ asset('assets/img/even2.jpeg') }}" alt="">
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card p-3 " style="height: 100%">
                        <h2 class="sm-title-1 font-weight-bold">Lorem, ipsum dolor sit amet consectetur</h2>
                        <span class="sm-title-3 font-weight-bold d-block my-2">10/05/2022 - Projection - Maison de la
                            culture</span>
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Veniam mollitia voluptatibus t
                        otam repellendus possimus laboriosam nemo.
                        Labore eum molestias suscipit ratione animi!
                        Voluptatibus, doloribus iure sit excepturi commodi
                        fuga officiis! Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Veniam mollitia voluptatibus t
                        otam repellendus possimus laboriosam nemo.
                        Labore eum molestias suscipit ratione animi!
                        Voluptatibus, doloribus iure sit excepturi commodi
                        fuga officiis!
                        <div>
                            <a class="importante font-weight-bold" href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <hr />
            <div class="col-12">
                <span class="font-weight-bold">Nos partenaires</span>
            </div>
        </div>
        <div class="col-12 col-md-10 col-lg-8 mx-auto p-3  d-flex flex-wrap">
            @foreach ([1, 2, 3, 4, 5, 6] as $item)
                <div class="col-4 col-md-2 my-2">
                    <img width="100%" src="{{ 'https://source.unsplash.com/random/800x800/?logo=' . $item }}"
                        alt="">
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-8 mx-auto">
        <div class="row g-5">
            <div class="col-lg-6">
                <p class="d-inline-block border rounded-pill py-1 px-4">Contacts</p>
                <h1 class="mb-4">Besoin d'informations ? Alors contactez-nous</h1>

                <div class="bg-white rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Appelez-nous maintenant</p>
                        <h5 class="mb-0">+226 XX XX XX XX</h5>
                    </div>
                </div>
                <div class="bg-white rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Envoyez-nous un mail</p>
                        <h5 class="mb-0">info@gmail.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white rounded h-100 d-flex align-items-center px-2">
                        
                    <form>
                        <div class="row">
                            <p class="col-12 mb-3">Envoyez-nous votre message maintenant</p>
                            <div class="col-12 col-sm-6 mb-3">
                                <input type="text" class="form-control border" placeholder="Nom et Prénom">
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <input type="email" class="form-control border" placeholder="Email">
                            </div>
                            <div class="col-12 col-sm-12 mb-3">
                                <input type="text" class="form-control border" placeholder="Téléphone">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea class="form-control border" rows="5" placeholder="Entrer votre commentaire"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
