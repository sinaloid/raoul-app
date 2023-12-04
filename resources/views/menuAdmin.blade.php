<div class="col-12 py-1 px-3 col-xl-11 mx-auto d-flex flex-wrap">
    <button data-toggle="modal" data-target="#service" type="button"
        class="btn mx-2 btn-warning font-weight-bold btn-sm mb-3">Ajouter un services</button>
    <a href="{{ route('admin') }}" class="btn mx-2 btn-secondary font-weight-bold btn-sm ml-auto mb-3">Voir les demandes</a>
    <a href="{{ route('service') }}" class="btn mx-2 btn-secondary  font-weight-bold btn-sm mb-3">Voir les services</a>
    <a href="{{ route('message') }}" class="btn mx-2 btn-secondary  font-weight-bold btn-sm mb-3">Voir les messages</a>
</div>
<div class="modal fade" id="service" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Création d'un nouveau service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createService') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Nom du service</label>
                        <input type="text" name="titre" class="form-control" id="titre"
                            aria-describedby="emailHelp" placeholder="Entrez le nom du service">
                    </div>
                    <div class="form-group">
                        <label for="image">Image d'illustration</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Example textarea</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="d-flex">
                        <button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
