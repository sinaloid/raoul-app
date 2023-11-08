@extends('template.app')

@section('page_title')
    Détails Édition
@endsection

@section('content')
    <div class="row py-5">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Détails Édition</span>
                </div>
                <div class="card-body">
                    <span class="font-weight-bold mx-2">artiste invité : </span> <span>Flobi</span> <br>
                    <span class="font-weight-bold mx-2">date de debut : </span> <span>15/04/2022</span> <br>
                    <span class="font-weight-bold mx-2">parrain ou marraine : </span> <span>Traore Ali</span> <br>
                </div>
                <hr class="bg-dark"/>
                <div class="px-2">
                    <span class="font-weight-bold mx-2">Creation / Modification</span>
                </div>
                <div class="card-body">
                    <form class="mx-2" action="/action_page.php">
                        <div class="form-group">
                            <label for="artiste">Artiste invité:</label>
                            <input type="text" class="form-control" placeholder="Enter le nom de l'artiste" id="artiste">
                        </div>
                        <div class="form-group">
                            <label for="artiste">Parrain ou Marraine:</label>
                            <input type="text" class="form-control" placeholder="Enter le nom du parrain ou de la marraine" id="artiste">
                        </div>
                        <div class="form-group">
                            <label for="date_debut">Date de début:</label>
                            <input type="date" class="form-control" id="date_debut">
                        </div>

                        <input class="btn btn-recis font-weight-bold mt-2 ml-auto" type="submit" value="Enregistrer"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
