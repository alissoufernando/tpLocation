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
                                        <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">

                                            @csrf

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">User Name</span>
                                            <input type="text" class="form-control mb-3" name="name" id="name" placeholder="name" value="{{ old('name') }}">
                                            @if($errors->has('name'))
                                                <div class="text-danger">{{$errors->first('name')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">E_Mail</span>
                                            <input type="text" class="form-control mb-3" name="email" id="email" placeholder="email" value="{{ old('email') }}">
                                            @if($errors->has('email'))
                                                <div class="text-danger">{{$errors->first('email')}}</div>
                                            @endif
                                          </div>

                                          <div class="input-group mb-3">
                                            <span class="input-group-text mb-3" id="">Mot de passe</span>
                                            <input type="text" class="form-control mb-3" name="password" id="password" placeholder="password"  >
                                            @if($errors->has('password'))
                                                <div class="text-danger">{{$errors->first('password')}}</div>
                                            @endif
                                          </div>

                                          @foreach ($roles as $role)
                                                <div class="form-group form-check">

                                                    <input type="checkbox" class="form-group form-check" name="roles[]"  value="{{$role->id}}" id="{{ $role->id}}">
                                                    <label for="{{$role->id}}" class="from-check-label">{{ $role->nom}}</label>
                                                  </div>
                                                @endforeach

                                          <div class="input-group mb-3">
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
