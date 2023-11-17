@extends('template.app')

@section('content')
    <div class="container m-top">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card1 bg-white py-2">
                    <div class="col my-5 text-center">
                        <img width="200px" height="auto" src="{{ asset('assets/img/logo.jpg') }}" />
                    </div>

                    <div class="col col-md-8 mx-auto my-5 text-center">
                        {{$message}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
