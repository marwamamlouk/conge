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
                        <h1>DataTables</h1>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                            </div>
                            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
              <div class="col-sm-12 col-md-6">
              </div>
              <div class="col-sm-12 col-md-6"></div></div>
              <div class="row">
              <div class="col-sm-12">
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <!-- Tawa nchouf chnouwa 3ena fe table users comme étant de champs w nektbouhom lahna okii ok -->
                    <th class="text-center">ID</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">numtel</th>
                    <th class="text-center">adresse</th>
                    <th class="text-center">grade</th>
                    <th>action</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr role="row" class="odd">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->numtel }}</td>
                        <td>{{ $user->adresse }}</td>
                        <td>{{ $user->grade }}</td>
                        <td>
                        <!--REti kifeh ? ey bien 
                        tawa lazemhom yjou bjanb b3adhhom oki ok voir comment Mais gbal ma nhez lcontenue lazemna nbadlou les boutons be des icons 
                        icons pour la modification w wa7da pour la supp okii ok bien 
                        tawa lazem nbadloulhom chwey fel width wel color mta3hom css hahou 
                        hhhhhhh hhhhhh haya tab3ini-->
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ url('users/'.$user->id.'/edit ') }}">
                                <i class="fas fa-user-edit" style="color: blue; transform:scale(1.5)"></i>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <!-- Hani jitk aya okii -->
                                <form action="{{ url('users/'.$user->id)  }}" method="post">
                                    @csrf <!-- clé kil 3ada  -->
                                    @method('delete')
                                    <!-- Sorry background lel bouton mesh mta3 l'icon ghletet 
                                    taaw mazel fema bordure on doit l'eviter okii ok claire ui
                                    bien brabi la7dha nsakhen l7lib el khouya sghir mazal ki fa9 okii ok
                                    -->
                                    <button type="submit" style=" background: none; border: none">
                                    <!-- Bouton supp tawa 3endha background lazemna ena7ouh okiiok -->
                                        <i class="fas fa-trash-alt"  style="color: red; transform:scale(1.5);"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        </td>        
                </tr>
                    @endforeach 
                <tfoot>
                    <th></th>
                </tfoot>
                <!-- Abrak tawa 
                    tawa nemshou n7awlou n7elou lpage hadhii à travers le controller okii ok
                 -->
                    <th class="text-center">ID</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">numtel</th>
                    <th class="text-center">adresse</th>
                    <th class="text-center">grade</th>
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