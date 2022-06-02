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
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('employes') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                    <!-- Il faut minimiser la taille des inputs voir comment en utilisant bootstrap okii ok bien
                                    hanhi c bon na3mlou nafs lméthode m3a lokhrin okii ok -->
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">CIN d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('cin') }}"  placeholder="Saisir le cin" name="cin">
                                                        
                                                        @error('cin')
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
                                                        <label for="exampleInputEmail1">Nom d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('name') }}" value="{{ old('name') }}"  placeholder="Saisir le nom d'employé" name="name">
                                                        
                                                        @error('name')
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
                                                        <label for="exampleInputEmail1">Email d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('email') }}" value="{{ old('name') }}"  placeholder="Saisir l'email d'employé" name="email">
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
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="">Grade d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="grade">
                                                            <option value="agent administratif">Agent administratif</option>
                                                            <option value="employé">Employé</option>
                                                        </select>
                                                        @error('grade')
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
                                                        <label for="exampleInputPassword1">Etat</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('etat') }}"   name="etat" placeholder="Saisit l'état d'employé">
                                                        @error('etat')
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
                                                        <label for="exampleInputPassword1">Type de contrat</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="type_contrat" id="">
                                                            <option value="" disabled selected>Choisir type de contrat</option>
                                                            <option value="CDI">CDI</option>
                                                            <option value="CDD">CDD</option>
                                                            <option value="vacataire">vacataire</option>
                                                        </select>
                                                        @error('type_contrat')
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
                                                        <label for="exampleInputPassword1">Solde</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('solde') }}"   name="solde" placeholder="Saisit le solde d'employé">
                                                        @error('solde')
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
                                                        <label for="exampleInputPassword1">Profession</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ old('profession') }}"   name="profession" placeholder="Saisit la profession d'employé">
                                                        @error('profession')
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