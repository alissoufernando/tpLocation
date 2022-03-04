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
                                    <li class="breadcrumb-item active" aria-current="page">Rôles_Users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="{{route('user.index')}}"
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
                        <div class="col-sm-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="d-md-flex text-center">
                                        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Modification des droits de {{ $user->name}}</h4>

                                    </div>
                                    <div class="table-responsive mt-5">
                                        <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="input-group mb-3">
                                                <span class="input-group-text mb-3" id="">User Name</span>
                                                <input type="text" class="form-control mb-3" name="name" id="name" placeholder="name" value="{{ old('name') ?? $user->name }}">
                                                @if($errors->has('name'))
                                                    <div class="text-danger">{{$errors->first('name')}}</div>
                                                @endif
                                              </div>

                                              <div class="input-group mb-3">
                                                <span class="input-group-text mb-3" id="">E_Mail</span>
                                                <input type="text" class="form-control mb-3" name="email" id="email" placeholder="email" value="{{ old('email') ?? $user->email }}">
                                                @if($errors->has('email'))
                                                    <div class="text-danger">{{$errors->first('email')}}</div>
                                                @endif
                                              </div>

                                                @foreach ($roles as $role)
                                                <div class="form-group form-check mb-3">
                                                    <span class="input-group-text mb-3" id="">Les rôles</span>
                                                    <input type="checkbox" class="form-group form-check" name="roles[]"  value="{{$role->id}}" id="{{ $role->id}}"
                                                    @foreach ($user->roles as $userRole)
                                                        @if ($userRole->id == $role->id)
                                                            checked
                                                        @endif
                                                    @endforeach>
                                                    <label for="{{$role->id}}" class="from-check-label">{{ $role->nom}}</label>
                                                  </div>
                                                @endforeach


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
