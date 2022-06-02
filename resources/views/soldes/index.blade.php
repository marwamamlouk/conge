<!-- kil 3ada enadou master mta3na  -->
@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <!-- Fel page hadhii nest7a9ou ykoun 3ena table lel affichage n'est ce pas ui
        bien emala njiboha men tempalte mta3na choufi kifeh tab3inin -->
        <div class="content-wrapper">
        <!-- Pour afficher la message eon doit utiliser la fonction @session() dans blade 7adhra fel laravel choufi kifeh  -->
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

                    @include('includes.stat')
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des employés</h1>
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
            <section class="content">
                <div class="row">
                @foreach($soldes as $solde)
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-info">
                        <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                            {{ DB::table('users')->where('id', $solde->user_id)->first()->name }}
                            </span>
                            <span class="info-box-number">Solde total: 30</span>
                            <span class="info-box-number">@if(Auth::user()->grade == "employe") Votre @endif Solde restante {{ $solde->solde }}</span>
                            <div class="progress">
                            <div class="progress-bar" style="width: {{ ((30 - $solde->solde)/30)*100 }}%"></div>
                            </div>
                            <span class="progress-description">
                            @if(Auth::user()->grade == "employe") Vous avez @endif 
                            @if(Auth::user()->grade != "employe")
                                {{ DB::table('users')->where('id', $solde->user_id)->first()->name }} 
                                as 
                            @endif 
                            utilisé {{ number_format((( 30 - $solde->solde)/30)*100, 2, ',', '') }}% de son solde
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </section>
        </div>   
        </div>    
    </div>
@endsection