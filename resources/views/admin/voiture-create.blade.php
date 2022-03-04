@extends('layouts.app-dasb')

@section('contenu')


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
                            <a href="{{ route('voiture.index')}}"
                                class="btn btn-success d-none d-md-inline-block text-white">Voir</a>
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
                                    <div class="d-md-flex text-center">
                                        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Ajouter une voiture</h4>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <form action="{{route('voiture.store')}}" method="post" enctype="multipart/form-data">

                                            @csrf

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Couleur</span>
                                            <input type="text" class="form-control mb-3" name="couleur" id="couleur" placeholder="Couleur"  >
                                            @if($errors->has('couleur'))
                                                <div class="text-danger">{{$errors->first('couleur')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Prix</span>
                                            <input type="text" class="form-control mb-3" name="prix" id="prix" placeholder="Prix"  >
                                            @if($errors->has('prix'))
                                                <div class="text-danger">{{$errors->first('prix')}}</div>
                                            @endif
                                          </div>

                                         

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Model</span>
                                            <input type="text" class="form-control mb-3" name="model" id="model" placeholder="Model"  >
                                            @if($errors->has('model'))
                                                <div class="text-danger">{{$errors->first('model')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Marque</span>
                                            <input type="text" class="form-control mb-3" name="marque" id="marque" placeholder="Marque"  >
                                            @if($errors->has('marque'))
                                                <div class="text-danger">{{$errors->first('marque')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Plaque</span>
                                            <input type="text" class="form-control mb-3" name="plaque" id="plaque" placeholder="Ex: RB: BV 4857" >
                                            @if($errors->has('plaque'))
                                                <div class="text-danger">{{$errors->first('plaque')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group">
                                            <span class="input-group-text">Image</span>
                                            <input type="file" accept="image/*" class="form-control mt-2 ml-2" id="pathImage" name="pathImage">
                                            @if($errors->has('pathImage'))
                                                <div class="text-danger">{{$errors->first('pathImage')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group mb-3 mt-5">
                                            <button type="submit" class="btn btn-outline-success">Ajouter</button>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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
