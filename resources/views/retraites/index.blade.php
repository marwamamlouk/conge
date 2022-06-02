<!-- On va intégrer la page pour afficher la liste de retraites -->
@extends('layouts.master')

@section('content')
    <div class="wrapper">
        @include('includes.header');
        @include('includes.aside');
        <div class="content-wrapper">
            <div class="container-fluid">
                @include('includes.stat')
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gérer retraites</h1>
                        </div>
                        <!-- tebloka  hataw nsaker w 3awdi connecti oku ok bien-->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Retraites</li>
                            </ol>
                        </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                            </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="text-center">CIN</th>
                                            <th class="text-center">name</th>
                                            <th class="text-center">email</th>
                                            <th class="text-center">Etat</th>
                                            <th class="text-center">Solde</th>
                                            <th class="text-center">Profession</th>
                                            <th class="text-center">type contrat</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($retraites as $value)
                                        <tr>
                                            <td>{{ $value->cin }}</td>
                                            <td>{{ $value->user->name }}</td>
                                            <td>{{ DB::table('users')->where('id', $value->user_id)->first()->email }}</td>
                                            <td>{{ $value->etat }}</td>    
                                            <td>{{ $value->solde }}</td>
                                            <td>{{ $value->profession }}</td>
                                            <td>{{ $value->type_contrat }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">CIN</th>
                                        <th class="text-center">name</th>
                                        <th class="text-center">email</th>
                                        <th class="text-center">Etat</th>
                                        <th class="text-center">Solde</th>
                                        <th class="text-center">Profession</th>
                                        <th class="text-center">type contrat</th>
                                        <th>action</th> 
                                    </tr>
                                    </tfoot>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection