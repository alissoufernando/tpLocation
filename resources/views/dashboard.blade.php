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
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">

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


                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Les tables</h4>
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
                                                    <th class="border-top-0">Tables</th>

                                                    <th class="border-top-0">Voir</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="text-center">
                                                    <td class="align-middle">Users</td>
                                                    <td class="align-middle">  <a href="{{route('user.index')}}" class="btn btn-outline-success"><i class=" fas fa-th-list"></i> Détail</a></td>
                                                </tr>

                                                <tr class="text-center">
                                                    <td class="align-middle">Rôles</td>
                                                    <td class="align-middle">  <a href="{{route('role.index')}}" class="btn btn-outline-success"><i class=" fas fa-th-list"></i> Détail</a></td>
                                                </tr>


                                                <tr class="text-center">
                                                    <td class="align-middle">Voitures</td>
                                                    <td class="align-middle">  <a href="{{route('voiture.index')}}" class="btn btn-outline-success"><i class=" fas fa-th-list"></i> Détail</a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="align-middle">Locations</td>
                                                    <td class="align-middle">  <a href="{{route('location.index')}}" class="btn btn-outline-success"><i class=" fas fa-th-list"></i> Détail</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
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
