@extends('layouts.master')
<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper">
        <!-- Pour afficher la message on utilise la fonction @session()  -->
            @if(session('edit-message'))
            <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-info"></i> Alert!</h5>
                  {{ session('edit-message') }}
                </div>

            @endif
            @if(session('delete-message'))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  {{ session('delete-message') }}
                </div>
            @endif
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des historiques</h1>
                    </div>
                    <!-- tebloka  hataw nsaker w 3awdi connecti oku ok bien-->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="content">
            @include('includes.stat')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <!-- faire des inputs pour les filtrages  -->
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                        <form action="{{ url('historique/filter') }}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <label for="date">Chercher par date</label>
                                                <input type="date" class="form-control" name="date_retour" id="date"/>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Chercher</button>
                                            </div>
                                        </form>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">Date debut</th>
                                                    <th class="text-center">date retour</th>
                                                    <th class="text-center">cause</th>
                                                    <th class="text-center">acceptation</th>
                                                    <th>action</th>
                                                </tr>
                                                    <!-- creer controller pour employe  -->
                                                </thead>
                                                <tbody>
                                                @foreach($conges as $conge)
                                                <tr role="row" class="odd">
                                                    <td>{{ $conge->id }}</td>
                                                    <td>{{ $conge->date_debut }}</td>
                                                    <td>{{ $conge->date_retour }}</td>
                                                        <td>{{ $conge->cause }}</td>
                                                        <td>
                                                        @php
                                                            $exist = empty($conge->acceptation)
                                                        @endphp
                                                        @if($exist == 1)
                                                                Le congé est en attente
                                                        @endif
                                                        @if($conge->acceptation == "non")

                                                        Le congé n'est pas accepté
                                                        @endif
                                                        @if($conge->acceptation == "oui")
                                                                le congé est accepté
                                                        @endif
                                                        </td>
                                                        <td>
                                                        <div class="row">
                                                            @if(Auth::user()->grade == "agent administratif")
                                                            <div class="col-md-3">
                                                                <a href="{{ url('conges/accepter/'.$conge->id) }}">
                                                                    <button class="btn btn-success" @if($conge->acceptation == "oui") disabled @endif>
                                                                        Accepter
                                                                    </button>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="{{ url('conges/refuser/'.$conge->id) }}">
                                                                    <button class="btn btn-danger" @if($conge->acceptation == "non") disabled @endif>
                                                                        Réfuser
                                                                    </button>
                                                                </a>
                                                            </div>
                                                            @else
                                                            <div class="col-md-6">
                                                                <a href="{{ url('conges/'.$conge->id.'/edit') }}">
                                                                <i class="fas fa-user-edit" style="color: blue; transform:scale(1.5)"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <form action="{{ url('conges/'.$conge->id)  }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" style=" background: none; border: none">
                                                                        <i class="fas fa-trash-alt"  style="color: red; transform:scale(1.5);"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            @endif
                                                        </div>

                                                        </td>
                                                </tr>
                                                    @endforeach
                                                <tfoot>
                                                    <th></th>
                                                </tfoot>
                                                -->
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">Date debut</th>
                                                    <th class="text-center">date retour</th>
                                                    <th class="text-center">cause</th>
                                                    <th class="text-center">acceptation</th>
                                                    <th>action</th>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
