@extends('template.app')

@section('page_title')
    Accueil
@endsection

@section('content')
    @include('carousel')
    @php
        $services = [
            'fr' => [
                'roro' => [
                    'image' => 'roro.jpeg',
                    'titre' => 'Fret maritime, aérien et RORO: Différents modes de transport adapté à vos besoins',
                    'contenu' => "AGTL est votre partenaire privilégié pour tous vos besoins de transport maritime, aérien et RORO.
                Pour tous vos besoins en transport maritime de vos marchandises, AGTL vous assure une gestion fluide et sécurisée de vos cargaisons, de la prise en charge à la livraison.
                En ce qui concerne le transport aérien, AGTL vous offre une solution de transport aérien complète et clé en main, de la prise en charge à la livraison. Notre équipe expérimentée s'occupe de tous les détails pour vous garantir un transport rapide et sécurisé de vos marchandises vers leur destination.
                Le transport RORO est la solution de transport de véhicules la plus économique et la plus flexible.
                Au fil des années, AGTL s'est imposé comme un partenaire de confiance pour vos besoins en matière de transport. Notre expertise et notre engagement indéfectible nous permettent de répondre à vos attentes, et même de les surpasser.
                Contactez AGTL dès aujourd'hui pour découvrir nos solutions de transport sur mesure et optimiser votre logistique.
                ",
                ],
                'exterieur' => [
                    'image' => 'interieur.jpeg',
                    'titre' => 'Transport Intérieur : Pour vos besoins locaux et transfrontaliers',
                    'contenu' => "AGTL est votre partenaire de confiance en matière de transport terrestre. Notre vous offrons des services de transport terrestre fiables pour répondre à tous vos besoins logistiques.
                Que ce soit pour des envois nationaux ou internationaux, notre vaste réseau de transports terrestres assure une livraison rapide et sécurisée de vos marchandises. Nous nous engageons à fournir un service de qualité, en veillant à ce que vos marchandises soient manipulées avec le plus grand soin tout au long du processus de transport.
                Avec notre service client exceptionnel et notre engagement envers la qualité, Nous nous engageons à répondre à vos besoins et à dépasser vos attentes.
                ",
                ],
                'solution' => [
                    'image' => 'stockage.jpeg',
                    'titre' => "Solutions d'Entreposage Sur Mesure: Optimisez Votre Gestion de Stock",
                    'contenu' => "AGTL est un prestataire de services de stockage fiable qui répond à tous vos besoins logistiques.
                    Nos entrepôts sécurisés et efficaces offrent une solution complète pour la gestion et le stockage de vos marchandises. Avec notre vaste espace d'entreposage, nous pouvons accueillir des envois de toutes tailles, des petits colis aux projets à grande échelle. Notre équipe expérimentée s'assurera que vos marchandises sont manipulées avec soin et sont disponibles lorsque vous en avez besoin.
                    Faites confiance à AGTL pour des services de stockage de haute qualité et une gestion logistique fiable.
                ",
                ],
            ],
            'en' => [
                'roro' => [
                    'image' => 'roro.jpeg',
                    'titre' => 'Ocean, Air, and RORO: Different modes of transportation tailored to your needs',
                    'contenu' => "
                    AGTL is your trusted partner for all your maritime, air, and roll on, roll off (RORO) transportation needs.
                    For all your maritime transportation needs, AGTL allows you to safely ship your goods across the world’s oceans. We ensure smooth and secure handling of your cargo, from pickup to delivery.
                    When it comes to airfreight, AGTL provides a comprehensive and turnkey airfreight solution, from pickup to delivery. Our experienced team handles all the details to ensure a fast and secure delivery of your cargo to its destination.
                    RORO shipping is the most economical and flexible solution for vehicle transportation.
                    Over the years, GTL has established itself as a trusted partner for your transportation needs. Our expertise and unwavering commitment allow us to meet and exceed your expectations.
                    Contact AGTL today to learn more about our tailored transportation solutions and optimize your logistics.
                ",
                ],
                'exterieur' => [
                    'image' => 'interieur.jpeg',
                    'titre' => 'Domestic Transportation: For Your Local and Cross-Border Needs',
                    'contenu' => "AGTL is your trusted partner in ground transportation. We offer reliable ground transportation services to meet all your logistical needs. 
                    Whether it's for domestic or international shipments, our extensive network of ground transportation ensures swift and secure delivery of your goods. We are committed to providing quality service, ensuring that your goods are handled with the utmost care throughout the transportation process.
                    With our exceptional customer service and dedication to quality, we are committed to meeting your needs and exceeding your expectations.
                ",
                ],
                'solution' => [
                    'image' => 'stockage.jpeg',
                    'titre' => 'Customized Storage Solutions: Optimize Your Inventory Management',
                    'contenu' => "AGTL is a reliable warehousing provider that meets all your logistics needs.
                    Our secure and efficient warehouses offer a comprehensive solution for managing and storing your goods. With our vast storage space, we can accommodate shipments of all sizes, from small parcels to large-scale projects. Our experienced team will ensure that your goods are handled with care and are available when you need them.
                    Trust AGTL for high-quality warehousing and reliable logistics management.
                ",
                ],
            ],
        ];
    @endphp
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 p-3 text-center">
            <span class="title-2 importante font-weight-bold text-uppercase">{{ 'Services' }}</span>
            <p>
                {{ $lang[app()->getLocale()]['agtl'] }}
            </p>
        </div>
        <div class="col-12 col-md-10 col-lg-8 mx-auto  d-flex flex-wrap">
            @foreach ($services[app()->getLocale()] as $key => $item)
                <div class="col-12 col-md-4 py-3">

                    <div class="card p-3 w-100" style="height: 100%">
                        <img width="100%" src="{{ asset('services/' . $item['image']) }}" alt="">

                        <h2 class="sm-title-1 font-weight-bold">
                            {{ $item['titre'] }}
                        </h2>
                        <p class="text-200">

                            {{ $item['contenu'] }}
                        </p>
                        <div>
                            <a class="importante font-weight-bold" href="{{ route('detailService', $key) }}">
                                {{ GoogleTranslate::trans('En savoir plus', app()->getLocale()) }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <hr />
            <div class="col-12">
                <span class="font-weight-bold">
                    {{ GoogleTranslate::trans('Nos partenaires', app()->getLocale()) }}
                </span>
            </div>
        </div>
        <div class="col-12 col-md-10 col-lg-8 mx-auto p-3  d-flex flex-wrap">
            <div class="col-4 col-md-2 my-2">
                <img width="100%" src="{{ asset('partenaires/cma_cga.png') }}" alt="logo CMA CGA">
            </div>
            <div class="col-4 col-md-2 my-2">
                <img width="100%" src="{{ asset('partenaires/dhl.png') }}" alt="logo DHL">
            </div>
            <div class="col-4 col-md-2 my-2">
                <img width="100%" src="{{ asset('partenaires/fedex.png') }}" alt="logo Fedex">
            </div>
            <div class="col-4 col-md-2 my-2">
                <img width="100%" src="{{ asset('partenaires/maersk.png') }}" alt="logo Maeresk">
            </div>
            <div class="col-4 col-md-2 my-2">
                <img width="100%" src="{{ asset('partenaires/ups.png') }}" alt="logo UPS">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-8 mx-auto mt-4">
        <div class="row g-5">
            <div class="col-lg-6">
                <p class="d-inline-block border rounded-pill py-1 px-4">
                    {{ GoogleTranslate::trans('Contacts', app()->getLocale()) }}</p>
                <h1 class="mb-4">
                    {{ GoogleTranslate::trans("Besoin d'informations ? Alors contactez-nous", app()->getLocale()) }}</h1>

                <div class="bg-white rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">{{ GoogleTranslate::trans('Appelez-nous maintenant', app()->getLocale()) }}</p>
                        <h5 class="mb-0">+226 71 30 29 73 / +1 (832) 406-5684</h5>
                    </div>
                </div>
                <div class="bg-white rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">{{ GoogleTranslate::trans('Envoyez-nous un mail', app()->getLocale()) }}</p>
                        <h5 class="mb-0">aguila.trading.logistics@agtlcargo.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white rounded h-100 d-flex align-items-center px-2">

                    <form class="w-100 p-4" action="{{ route('createMessage') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nom">
                                {{ GoogleTranslate::trans('Nom et Prenom', app()->getLocale()) }}
                                :</label>
                            <input type="text" name="nom" class="form-control"
                                placeholder="Entrer votre nom et prenom" id="nom">
                        </div>
                        <div class="form-group">
                            <label for="email">{{ GoogleTranslate::trans('Nom Prenom', app()->getLocale()) }} :</label>
                            <input type="email" name="email" class="form-control" placeholder="Entrer votre email"
                                id="email">
                        </div>
                        <div class="form-group">
                            <label for="telephone">{{ GoogleTranslate::trans('Téléphone', app()->getLocale()) }} :</label>
                            <input type="text" name="telephone" class="form-control" placeholder="Entrer votre email"
                                id="telephone">
                        </div>
                        <div class="form-group">
                            <label for="comment">{{ GoogleTranslate::trans('Commentaire', app()->getLocale()) }} :</label>
                            <textarea class="form-control" name="description" rows="5" id="comment" placeholder="Entrer votre message"></textarea>
                        </div>
                        <button type="submit"
                            class="btn btn-primary">{{ GoogleTranslate::trans('Envoyer', app()->getLocale()) }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
