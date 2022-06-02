@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper">
            <!-- On doit insérer un formualaire ici à travers le template  -->
            <!-- C'est la formulaire mais on a besoin d'ajouter avant les classes
            contentcontainer row col-md-6  voir comment-->
            <!-- Maitenant on va voir quels sont les champs d'employé afin de faire
            un input à chaque champ okii ok -->
            <div class="content">
                <div class="container">
                @include('includes.stat')
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Ici la formulaire maintenant  -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('secretaires') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                    <!-- Il faut minimiser la taille des inputs voir comment en utilisant bootstrap okii ok bien
                                    hanhi c bon na3mlou nafs lméthode m3a lokhrin okii ok -->
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Nom de secrétaire</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <!-- on va définit l'attribut value avec une fonction
                                                    nommé old(nom d'input) fonction hadhi tsajelek akher valeur kan fel input okii ok bien -->
                                                        <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Saisir le nom de secretaire" name="name">
                                                        <!-- Lazem kol message d'erreur mta3 input yji te7t l'input mta3a hekka walla ? ey bien
                                                        voir comment  -->
                                                        @error('name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <!-- $message trouve la resultat de la fonction error okii ok  -->
                                                        <!-- error fonction prés définit takhedh comme parametre ems l'input w traje3 variale fih
                                                        message d'erruer okii ok bien
                                                        nchoufou template mta3na nalgouch feha message d'erreur rtah  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Email de secrétaire</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('email') }}"  placeholder="Saisir l'email de secrétaire" name="email">
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Mot de passe</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" value="{{ old('password') }}"  placeholder="Saisir le mot de passe" name="password">
                                                        @error('password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Num Tèl</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('numtel') }}"  placeholder="Saisir le numéro de téléphone" name="numtel">
                                                        @error('numtel')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Adresse</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('adresse') }}"  placeholder="Saisir le'adresse" name="adresse">
                                                        @error('adresse')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputPassword1">Date de recrutement</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control" value="{{ old('date_recrutement') }}"   name="date_recrutement">
                                                        @error('date_recrutement')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <!-- trah njarbou code mta3na taw nchoufouhom yetsajlou walla  -->
                                    <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-default">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
