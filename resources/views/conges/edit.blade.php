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
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <form action="{{ url('conges/'.$conge->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Date debut</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control" value="{{ $conge->date_debut }}" name="date_debut">
                                                        @error('date_debut')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Date retour</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    
                                                        <input type="date" class="form-control" value="{{ $conge->date_retour }}"  name="date_retour">             
                                                        @error('date_retour')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Cause</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" value="{{ $conge->cause }}"  name="cause">{{ $conge->cause }}</textarea>
                                                        @error('date_retour')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- trah njarbou tawa  -->
                                    <!-- Eli 3melnahom tawa homa les champs commune tawa lazem nzidou les champs mta3 table employé okii ok -->

                                    
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