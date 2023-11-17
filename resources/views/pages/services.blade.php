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
            <span class="title-2 importante font-weight-bold text-uppercase">Nos Services</span>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore tenetur dolores aliquid laborum, sint neque
                amet quod voluptates est saepe, corporis enim pariatur illo ad deserunt quos hic eius ab.
            </p>
        </div>
        <div class="col-12 col-md-10 col-lg-8 mx-auto  d-flex flex-wrap">
            @foreach ($datas as $item)
                <div class="col-12 col-md-4 py-3">

                    <div class="card p-3 w-100" style="height: 100%">
                        <img width="100%" src="{{ asset($item->image) }}"
                            alt="">

                        <h2 class="sm-title-1 font-weight-bold">{{$item->titre}}</h2>
                        <p>
                            {{$item->description}}
                        </p>
                        <div>
                            <a class="importante font-weight-bold" href="{{route("detailService",$item->id)}}">En savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




    </div>
@endsection
