@extends('template.app')

@section('page_title')
    événements
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
            <span class="title-2 importante font-weight-bold text-uppercase">{{ GoogleTranslate::trans("Détails du service", app()->getLocale()) }}</span>
            
        </div>
        <div class="col-12 col-md-8 col-lg-6 mx-auto mt-2 p-3">
            <div>
                <img width="100%" src="{{asset($data->image)}}" alt="service image" />
            </div>
            <h2 class="py-4">{{ GoogleTranslate::trans($data->titre, app()->getLocale()) }}</h2>
            <p>
               {{ GoogleTranslate::trans($data->description, app()->getLocale()) }}
            </p>
        </div>
        




    </div>
@endsection
