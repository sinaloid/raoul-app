  @extends('template.app')

  @section('page_title')
      Contact
  @endsection

  @section('content')
      <div class="container">
          <div class="row">

              <div class="col-12 col-xl-11 mx-auto d-flex flex-wrap">
                  <h2 class="px-2 w-100 font-weight-bold my-5">Liste des demandes</h2>

              </div>
              @include('menuAdmin')
          </div>
          <div class="row mt-3">
              <div class="col-12 col-xl-11 mx-auto table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nom Prénom</th>
                              <th scope="col">Téléphone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Entreprise</th>
                              <th scope="col">Date</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($datas as $key => $item)
                              <tr>
                                  <th scope="row">{{ $key + 1 }}</th>
                                  <td>{{ $item->demandeur_nom }}</td>
                                  <td>{{ $item->demandeur_telephone }}</td>
                                  <td>{{ $item->demandeur_email }}</td>
                                  <td>{{ $item->demandeur_entreprise }}</td>
                                  <td>{{ $item->created_at }}</td>
                                  <td>
                                      <button type="button" class="btn mx-2 btn-secondary font-weight-bold btn-sm mb-2"
                                          data-toggle="modal" data-target="#voir{{ $key }}">Voir</button>
                                      <button type="button" class="btn mx-2 btn-danger font-weight-bold btn-sm mb-2"
                                          data-toggle="modal" data-target="#delete{{ $key }}">Supprimer</button>

                                  </td>
                              </tr>
                              <div class="modal fade" id="voir{{ $key }}" tabindex="-1"
                                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg modal-dialog-centered">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Contenu de la demande</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-12 col-md-6 mb-4">
                                                      <div class="font-weight-bold">
                                                          1 -{{ $lang[app()->getLocale()]['Informations personnelles'] }}
                                                      </div>
                                                      <div>
                                                          <span>Nom du demandeur : </span>
                                                          <span class="font-weight-bold">{{ $item->demandeur_nom }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Adresse du demandeur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->demandeur_adresse }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Téléphone du demandeur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->demandeur_telephone }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Email du demandeur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->demandeur_email }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Entreprise du demandeur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->demandeur_entreprise }}</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-12 col-md-6 mb-4">
                                                      <div class="font-weight-bold">
                                                          2 -
                                                          {{ $lang[app()->getLocale()]["Informations de l'exportateur"] }}
                                                      </div>
                                                      <div>
                                                          <span>Nom de l'exportateur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->exportateur_nom }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Adresse de l'exportateur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->exportateur_adresse }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Téléphone de l'exportateur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->exportateur_telephone }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Email de l'exportateur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->exportateur_email }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Passeport ou CNI de l'exportateur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->exportateur_passport }}</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-12 col-md-6 mb-4">
                                                      <div class="font-weight-bold">
                                                          3 -{{ $lang[app()->getLocale()]['Informations du receveur'] }}
                                                      </div>
                                                      <div>
                                                          <span>Nom du receveur : </span>
                                                          <span class="font-weight-bold">{{ $item->receveur_nom }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Adresse du receveur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->receveur_adresse }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Téléphone du receveur : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->receveur_telephone }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Email du receveur : </span>
                                                          <span class="font-weight-bold">{{ $item->receveur_email }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Pays du receveur : </span>
                                                          <span class="font-weight-bold">{{ $item->receveur_pays }}</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-12 col-md-6 mb-4">
                                                      <div>
                                                          <span>{{ $lang[app()->getLocale()]["Type d'expédition"] }} : </span>
                                                          <span class="font-weight-bold">{{ $item->type_expedition }}</span>
                                                      </div>
                                                      <div>
                                                          <span>Assurance : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->assurance }}</span>
                                                      </div>
                                                      <div>
                                                          <span>{{ $lang[app()->getLocale()]["Douane"] }} : </span>
                                                          <span
                                                              class="font-weight-bold">{{ $item->douane }}</span>
                                                      </div>
                                                      
                                                  </div>
                                                  <div class="col-12 mb-4">
                                                    <span>{{ $lang[app()->getLocale()]["Commentaire"] }} : </span>
                                                        <p>
                                                          {{ $item->description }}
                                                        </p>
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"
                                                  data-dismiss="modal">Fermer</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="modal fade" id="delete{{ $key }}" tabindex="-1"
                                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Suppression de données</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              Voulez vous supprimer definitivement ces données ?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"
                                                  data-dismiss="modal">Non</button>
                                              <form action="{{ route('deleteDemande', $item->id) }}" method="POST">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-primary">Oui</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  @endsection
