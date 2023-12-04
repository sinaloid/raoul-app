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
                          <tr>
                              <th scope="row">1</th>
                              <td>Traore Ismael</td>
                              <td>+226 xxx</td>
                              <td>admin@email.com</td>
                              <td>M-House</td>
                              <td>12/12/2023</td>
                              <td>
                                  <button type="button"
                                      class="btn mx-2 btn-secondary font-weight-bold btn-sm mb-2">Voir</button>
                                  <button type="button"
                                      class="btn mx-2 btn-danger font-weight-bold btn-sm mb-2">Supprimer</button>

                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  @endsection
