<!-- On va copier ici la formulaite de creation
ensuite on va faire le traitement  -->
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Ici la formulaire maintenant  -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">modifier employé</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('employes/'.$employe->cin) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <!-- Method put crée un clé pour la modification
                                    put is a method of send request like post and get but this is a method for the modification
                                    is taht clear ? yes good s3aat jomal ma talgahomch fel français hhh hani nifhmik hh hkhw emala jawna bahii -->
                                    <div class="card-body">
                                    <!-- employe this is the variable that we sent from the controller do you notice ? ui good -->
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">CIN d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ $employe->cin }}"  placeholder="Saisir le cin" name="cin">

                                                        @error('cin')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="exampleInputEmail1">Nom d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <!-- now we know that this var employe has a lsit of information of an employe okay ok
                                                    good We have just to put each value in its input field -->
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->name }}"  placeholder="Saisir le nom d'employé" name="name">
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
                                                        <label for="exampleInputEmail1">Email d'employé</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->email }}"  placeholder="Saisir l'email d'employé" name="email">
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
                                                        <input type="password" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->password }}"  placeholder="Saisir le mot de passe" name="password">
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
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->numtel }}"  placeholder="Saisir le numéro de téléphone" name="numtel">
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
                                                        <input type="text" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->adresse }}"  placeholder="Saisir le'adresse" name="adresse">
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
                                                        <input type="date" class="form-control" value="{{ DB::table('users')->where('id', $employe->user_id)->first()->date_recrutement }}"   name="date_recrutement">
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
                                                    <!-- Here now we have to make a condition to select the right option
                                                    because we have a lot did you understand ? nn
                                                    okii kan la7adhtich lahna fema dexu option fe select nn??
                                                    agent admini
                                                    employe shihs walla ? ey bien feme attribut fe select html esmha selected
                                                    reti win ktabtha ? ui chno9sdou beha za3ma ? condition valable pour agent admin akaho
                                                    la la awwel haja hadhi html ma 3endha hatta 3ala9a bel laravel mela?
                                                    okii nfahmek liste de roulante select feha plusieur options
                                                    eli selectionné par défaut houwa awel valeur mawjdou zay fel exmp eli 3ena a
                                                    agent administraitf houwa eli selectionné par défaut oki okaleth wawlla 10 bech ykoun
                                                    selectionné par defaut chna3mel, nji fe akher tag option w nekteb selected hataw ywali
                                                    wa9teli n7eb ana yabda valeur eth
                                                    fhamtini ? ui bien tawa esh besh na3mlou 7na lazem option eli tkoun selectionné par défaut
                                                    hiya eli besh tkoun égau 3al lvaleur lmawjoud fe champ grade mta3 l'employe claire ?? ui
                                                    bien voir comment -->
                                                        <select name="grade">
                                                            <option value="agent administratif" @if($employe->grade == "agent administratif") selected @endif>Agent administraytif</option>
                                                            <option value="employé" @if($employe->grade == "employé") selected @endif>Employé</option>
                                                        </select>
                                                        <!-- cv wadh7a ?
                                                        nn, bahi tab3ini 3emlt condition if 3adiya w golt fel condition kan $employe->grade mesh 3ena
                                                        champ grade 7na ?? ey bahii ki yabda valeur mta3a égale lel valeur mta3 l'option el houwa
                                                        y'activi l'attribut selected w tawli l'option haki séléctionné par défaut wadh7a ?? -->
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
                                                        <input type="text" class="form-control" value="{{ $employe->etat }}"   name="etat" placeholder="Saisit l'état d'employé">
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
                                                        <label for="exampleInputPassword1">Solde</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="{{ $employe->solde }}"   name="solde" placeholder="Saisit le solde d'employé">
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
                                                        <input type="text" class="form-control"  value="{{ $employe->profession }}"  name="profession" placeholder="Saisit la profession d'employé">
                                                        @error('profession')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- trah njarbou tawa lformulaire mta3na ki bech net3adoula bel bouton besh yjina m3abi walla okiiok
                                    nafs lmshkla mta3 relation hadhii  -->
                                    <!-- /.card-body -->
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
