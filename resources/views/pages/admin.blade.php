@extends('template.app')

@section('page_title')
    Contact
@endsection

@section('content')
    <!--div class="row">
                <div class="col-12 col-md-10 col-lg-8 mx-auto">
                    <div class="col-12 mt-5 py-2 card">
                        <h2 class="text-uppercase">éditions des RECIS</h2>
                        <p>The .table-striped class adds zebra-stripes to a table:</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>annee</th>
                                    <th>Lastname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div-->


    <div class="container">
        <div class="row">

            <div class="col-12 col-xl-11 mx-auto d-flex flex-wrap">
                <h2 class="px-2 w-100 font-weight-bold">Edition</h2>
                <form class="px-2" action="/action_page.php">
                    <select name="cars" class="custom-select mb-3">
                        <option selected>Custom Select Menu</option>
                        <option value="volvo">2021</option>
                        <option value="fiat">2020</option>
                        <option value="audi">2019</option>
                    </select>
                    <button type="submit" class="btn btn-recis font-weight-bold">Valider</button>
                    <button type="button" class="btn mx-2 btn-secondary font-weight-bold">Creer</button>
                </form>
            </div>
            <div class="col-12 py-1 px-3 col-xl-11 mx-auto d-flex flex-wrap">
                <span class="font-weight-bold px-1 mx-1 align-middle">Edition selection: </span> <span>2021</span>
                <button type="button" class="btn mx-2 btn-warning font-weight-bold btn-sm ml-auto">modifier</button>
                <button type="button" class="btn mx-2 btn-danger  font-weight-bold btn-sm">supprimer</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-11 mx-auto d-flex flex-wrap">
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("detail")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Détails édition
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("bilan")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Bilans édition
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("foire")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Foire
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("partenaire")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Partenaires
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("ressource")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Ressources personnes
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("theme")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Thèmes edition
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("a.photo")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Photos edition
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0" onclick='window.open("{{route("even")}}", "_self")'>
                    <div class="card mx-auto">
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Evenement
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("film")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Films
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-3 p-0">
                    <div class="card mx-auto" onclick='window.open("{{route("laureat")}}", "_self")'>
                        <img src="https://images.unsplash.com/photo-1536323760109-ca8c07450053" alt="Img Card" />
                        <div class="card-body">
                            <div class="card-title">
                                Lauréats
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
