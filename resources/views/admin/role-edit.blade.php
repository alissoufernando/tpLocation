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
                                    <li class="breadcrumb-item active" aria-current="page">Rôles</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="{{route('role.index')}}"
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
                                <div class="card-body">
                                    <div class="d-md-flex text-center">
                                        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Mettre à jour</h4>

                                    </div>
                                    <div class="table-responsive mt-5">
                                        <form action="{{route('role.update',$role->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method(PUT)
                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Nom du rôle</span>
                                            <input type="text" class="form-control mb-3" name="nom" id="nom" placeholder="nom"  value="{{$role->nom}}">
                                            @if($errors->has('nom'))
                                                <div class="text-danger">{{$errors->first('nom')}}</div>
                                            @endif
                                          </div>



                                          <div class="input-group mb-3">
                                            <button type="submit" class="btn btn-outline-success">Mettre à jour</button>
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
