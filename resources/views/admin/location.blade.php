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
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                                    <li class="breadcrumb-item active" aria-current="page">Location</li>
                                </ol>
                            </nav>
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
                                        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Les locations</h4>
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
                                                    <th class="border-top-0">Date début de location</th>
                                                    <th class="border-top-0">Date fin de location</th>
                                                    <th class="border-top-0">Nom du locataire</th>
                                                    <th class="border-top-0">Nom de la voiture</th>
                                                    <th class="border-top-0">Numero de téléphone</th>
                                                    <th class="border-top-0">Etat de location</th>
                                                    <th class="border-top-0">Rendre</th>
                                                    <th class="border-top-0">Supprimer</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $locations)
                                                <tr class="text-center">
                                                    <td class="align-middle">{{$locations->id}}</td>
                                                    <td class="align-middle">{{$locations->dateDebutLocation}}</td>
                                                    <td class="align-middle">{{$locations->dateFinLocation}}</td>
                                                    <td class="align-middle">{{$locations->user->name}}</td>
                                                    <td class="align-middle">{{$locations->voiture->marque}}</td>
                                                    <td class="align-middle">{{$locations->telephone}}</td>
                                                    <td class="align-middle">
                                                        @if ($locations->autoriser == "non valider")

                                                            {{$locations->etat}}
                                                        @else
                                                            traitement effectué

                                                        @endif
                                                    </td>
                                                    <td class="align-middle">
                                                        @if ($locations->rendre == "non")
                                                        <form action="{{ route('location.updateRendre', $locations->id)}}" method="post">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="rendre" value="Rendu" >

                                                            <button class="btn btn-outline-success">  <i class="fas fa-check"></i> Rétirer</button>
                                                        </form>
                                                        @else
                                                        <button class="btn btn-outline-success cursor-not-allowed" disabled>  <i class="fas fa-check"></i> Déja Rendu</button>

                                                        @endif

                                                    </td>
                                                    <td class="align-middle">

                                                        <form action="{{ route('location.destroy', $locations->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')



                                                            <button class="btn btn-outline-danger">  <i class="fas fa-trash-alt"></i> delete</button>
                                                        </form>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{$data->links()}}
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
