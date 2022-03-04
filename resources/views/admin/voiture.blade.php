@extends('layouts.app-dasb')

@section('contenu')

            <!-- Modal -->
            <!-- Modal add-->
<div class="modal fade" id="addCars" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="staticBackdropLabel">Ajouter Une Voiture</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="btn-outline-danger far fa-window-close"></i> </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('voiture.store')}}" method="post" enctype="multipart/form-data">
                @csrf

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Couleur</span>
                <input type="text" class="form-control mb-3" name="couleur" id="couleur" placeholder="Couleur"  >
                @if($errors->has('couleur'))
                    <div class="text-danger">{{$errors->first('couleur')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Prix</span>
                <input type="text" class="form-control mb-3" name="prix" id="prix" placeholder="Prix"  >
                @if($errors->has('prix'))
                    <div class="text-danger">{{$errors->first('prix')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Description</span>
                <input type="text" class="form-control mb-3" name="description" id="description" placeholder="description"  >
                @if($errors->has('description'))
                    <div class="text-danger">{{$errors->first('description')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Model</span>
                <input type="text" class="form-control mb-3" name="model" id="model" placeholder="Model" aria-label="Model" >
                @if($errors->has('model'))
                    <div class="text-danger">{{$errors->first('model')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Marque</span>
                <input type="text" class="form-control mb-3" name="marque" id="marque" placeholder="Marque"  >
                @if($errors->has('marque'))
                    <div class="text-danger">{{$errors->first('marque')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Plaque</span>
                <input type="text" class="form-control mb-3" name="model" id="model" placeholder="Ex: RB: BV 4857" >
                @if($errors->has('model'))
                    <div class="text-danger">{{$errors->first('model')}}</div>
                @endif
              </div>

              <div class="input-group">
                <span class="input-group-text" for="inputGroupFile01">Image</span>
                <input type="file" accept="image/*" class="form-control" id="pathImage" name="pathImage">
                @if($errors->has('pathImage'))
                    <div class="text-danger">{{$errors->first('pathImage')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <button type="submit" class="btn btn-outline-success">Ajouter</button>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>

        </div>
      </div>
    </div>
  </div>

  <!-- end Modal add-->
  <!-- Modal edit-->
  <div class="modal fade" id="editCars" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="staticBackdropLabel">Mettre à jour Une Voiture</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="btn-outline-danger far fa-window-close"></i> </button>
        </div>
        <div class="modal-body">

            <form action="" method="post" enctype="multipart/form-data">
                @csrf

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Couleur</span>
                <input type="text" class="form-control mb-3" name="couleur" id="couleur" placeholder="Couleur"  value="">
                @if($errors->has('couleur'))
                    <div class="text-danger">{{$errors->first('couleur')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Prix</span>
                <input type="text" class="form-control mb-3" name="prix" id="prix" placeholder="Prix"  value="">
                @if($errors->has('prix'))
                    <div class="text-danger">{{$errors->first('prix')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Description</span>
                <input type="text" class="form-control mb-3" name="description" id="description" placeholder="description"  value="">
                @if($errors->has('description'))
                    <div class="text-danger">{{$errors->first('description')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Model</span>
                <input type="text" class="form-control mb-3" name="model" id="model" placeholder="Model" aria-label="Model" value="">
                @if($errors->has('model'))
                    <div class="text-danger">{{$errors->first('model')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Marque</span>
                <input type="text" class="form-control mb-3" name="marque" id="marque" placeholder="Marque"  value="">
                @if($errors->has('marque'))
                    <div class="text-danger">{{$errors->first('marque')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text mb-3" id="basic-addon1">Plaque</span>
                <input type="text" class="form-control mb-3" name="model" id="model" placeholder="Ex: RB: BV 4857" value="">
                @if($errors->has('model'))
                    <div class="text-danger">{{$errors->first('model')}}</div>
                @endif
              </div>

              <div class="input-group">
                <span class="input-group-text" for="inputGroupFile01">Image</span>
                <input type="file" accept="image/*" class="form-control" id="pathImage" name="pathImage" value="">
                @if($errors->has('pathImage'))
                    <div class="text-danger">{{$errors->first('pathImage')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <button type="submit" class="btn btn-outline-success">Mettre à jour</button>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>

        </div>
      </div>
    </div>
  </div>
  <!--end Modal edit-->

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Voiture</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="{{route('voiture.create')}}"
                                class="btn btn-success d-none d-md-inline-block text-white">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->


                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                    {{session('success')}}
                                    </div>
                                @endif
                                @if (session('danger'))
                                    <div class="alert alert-danger">
                                    {{session('danger')}}
                                    </div>
                                @endif
                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Thes cars</h4>
                                        <div class="col-md-2 ms-auto">
                                            <select class="form-select shadow-none col-md-2 ml-auto">
                                                <option selected>January</option>
                                                <option value="1">February</option>
                                                <option value="2">March</option>
                                                <option value="3">April</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table stylish-table no-wrap">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="border-top-0">N°</th>
                                                    <th class="border-top-0">Image</th>
                                                    <th class="border-top-0">Plaque</th>
                                                    <th class="border-top-0">Marque</th>
                                                    <th class="border-top-0">Couleur</th>
                                                    <th class="border-top-0">Prix</th>

                                                    <th class="border-top-0">disponible</th>
                                                    <th class="border-top-0">Editer</th>
                                                    <th class="border-top-0">Supprimer</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($voiture as $voitures)
                                                <tr class="text-center">
                                                    <td class="align-middle">{{$voitures->id}}</td>
                                                    <td><span class="round"><img
                                                        src="{{asset('storage')}}/{{ $voitures->pathImage }}" alt="cars"
                                                        width="50"></span>
                                                    </td>

                                                    <td class="align-middle">{{$voitures->plaque}}</td>
                                                    <td class="align-middle">{{$voitures->marque}}</td>
                                                    <td class="align-middle">{{$voitures->couleur}}</td>
                                                    <td class="align-middle">{{$voitures->getPrix()}}</td>

                                                    <td class="align-middle">{{$voitures->disponible}}</td>
                                                    <td class="align-middle"><a href="{{route('voiture.edit', $voitures->id)}}" type="button" class="btn btn-outline-success"> <i class="fas fa-edit"></i> edit</a></td>
                                                    <td class="align-middle">
                                                        <form action="{{route('voiture.destroy', $voitures->id )}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-outline-danger">  <i class="fas fa-trash-alt"></i> delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{$voiture->links()}}
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->

@endsection
