@extends('template.app')

@section('page_title')
    Foire
@endsection

@section('content')
    <div class="row py-5">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Foire</span>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Odio quidem ex, ipsam neque praesentium modi voluptate at 
                        cumque dolores recusandae voluptatum, assumenda facere quia 
                        obcaecati ipsum iusto et libero rerum?
                    </p>
                </div>
                <hr class="bg-dark"/>
                <div class="px-2">
                    <span class="font-weight-bold mx-2">Creation / Modification</span>
                </div>
                <div class="card-body">
                    <form class="mx-2" action="/action_page.php">
                        <div class="form-group">
                            <label for="description">description:</label>
                            <input type="text" class="form-control" placeholder="Description du bilan" name="description" id="description">
                        </div>
                        <input class="btn btn-recis font-weight-bold mt-2 ml-auto" type="submit" value="Enregistrer"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
