@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper" style="min-height: 732px;">
    <!-- Content Header (Page header) -->
    <!-- J'ai crée un nouveau conroller et j'ai le nommé contactController  -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>messagerie</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">accueil</a></li>
              <li class="breadcrumb-item active">messagerie</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          @include('includes.contact')
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Créer nouveau message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ url('/contacts') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="à:" name="recepteur">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Sujet:" name="sujet">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px; display: none;" name="message">
                    </textarea>
                    </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                    <button class="btn btn-default" type="reset">Annuler</button>
                </div>
                </form>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    </div>

@endsection
