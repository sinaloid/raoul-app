  @extends('template.app')

  @section('page_title')
      Contact
  @endsection

  @section('content')
      <div class="container">
          <div class="row">

              <div class="col-12 col-xl-11 mx-auto d-flex flex-wrap">
                  <h2 class="px-2 w-100 font-weight-bold my-5">Liste des services</h2>

              </div>
              @include('menuAdmin')
          </div>
          <div class="row mt-3">
              <div class="col-12 col-xl-11 mx-auto table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Image</th>
                              <th scope="col">Nom du service</th>
                              <th scope="col">Date</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($datas as $key => $item)
                              <tr>
                                  <th scope="row">{{ $key + 1 }}</th>
                                  <td>
                                    <img width="64px" src="{{asset($item->image)}}" alt="" />
                                  </td>
                                  <td>{{ $item->titre }}</td>
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
                                  <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Détails</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              {{ $item->description }}
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
                                              <form action="{{ route('deleteService', $item->id) }}" method="POST">
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
