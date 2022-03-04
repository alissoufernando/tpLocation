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
            <div class="col-sm-10">
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
                            <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Mes locations</h4>
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


                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data)

                                    @foreach ($data as $locations)
                                    <tr class="text-center">
                                        <td class="align-middle">{{$locations->id}}</td>
                                        <td class="align-middle">{{$locations->dateDebutLocation}}</td>
                                        <td class="align-middle">{{$locations->dateFinLocation}}</td>
                                        <td class="align-middle">{{Auth::user()->name}}</td>
                                        <td class="align-middle">{{$locations->voiture->marque}}</td>
                                        <td class="align-middle">{{$locations->telephone}}</td>
                                        <td class="align-middle">
                                            @if ($locations->autoriser == "non valider")

                                                {{$locations->etat}}
                                            @else
                                                traitement effectué

                                            @endif
                                        </td>
                                        <td class="align-middle">{{$locations->rendre}}
                                            @if ($locations->rendre == "non")
                                            <form action="{{ route('Ulocation.updateRendre', $locations->id)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="rendre" value="Rendu" >

                                                <button class="btn btn-outline-success">  <i class="fa fa-check"></i> Rendu</button>
                                            </form>
                                            @else
                                            <button class="btn btn-outline-success cursor-not-allowed" disabled>  <i class="fa fa-check"></i> Déja Rendu</button>

                                            @endif

                                        </td>

                                    @endforeach


                                </tbody>
                            </table>
                            @else
                                <p>Auccune location n'a ete effectuee</p>
                            @endif
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

</div>

@endsection
