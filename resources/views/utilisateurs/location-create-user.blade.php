@extends('layouts.app-user')

@section('contenuutilisatteur')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->


        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-sm-8">
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
                            <h4 class="card-title col-md-8 mb-md-0 mb-3 align-self-center">Location</h4>
                        </div>
                        <div class="table-responsive mt-5">
                            <form action="{{route('Ulocation.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                              <div class="input-group mb-3">
                                <span class="input-group-text mb-3" id="">Date de debut</span>
                                <input type="date" class="form-control mb-3" name="dateDebutLocation" id="dateDebutLocation" placeholder="dateDebutLocation"  >
                                @if($errors->has('dateDebutLocation'))
                                    <div class="text-danger">{{$errors->first('dateDebutLocation')}}</div>
                                @endif
                              </div>

                              <div class="input-group mb-3">
                                <span class="input-group-text mb-3" id="">Date de fin</span>
                                <input type="date" class="form-control mb-3" name="dateFinLocation" id="dateFinLocation" placeholder="dateFinLocation"  >
                                @if($errors->has('dateFinLocation'))
                                    <div class="text-danger">{{$errors->first('dateFinLocation')}}</div>
                                @endif
                              </div>

                              <div class="input-group mb-3">
                                <span class="input-group-text mb-3" id="">Telephone</span>
                                <input type="tel" class="form-control mb-3" name="telephone" id="telephone" placeholder="telephone"  >
                                @if($errors->has('telephone'))
                                    <div class="text-danger">{{$errors->first('telephone')}}</div>
                                @endif
                              </div>

                              <div class="input-group mb-3 d-none">
                                <span class="input-group-text mb-3" id="">Nom locataire </span>
                                <input type="text" class="form-control mb-3 " name="user_id" id="user_id" placeholder="user_id"  value="{{Auth::user()->id}}">
                                @if($errors->has('user_id'))
                                    <div class="text-danger">{{$errors->first('user_id')}}</div>
                                @endif
                              </div>

                              <div class="input-group mb-3 d-none">
                                <span class="input-group-text mb-3" id="">Nom voiture</span>
                                <input type="text" class="form-control mb-3" name="voiture_id" id="voiture_id"  value="{{$voiture->id}}">
                                @if($errors->has('voiture_id'))
                                    <div class="text-danger">{{$errors->first('voiture_id')}}</div>
                                @endif
                              </div>
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


</div>

@endsection
