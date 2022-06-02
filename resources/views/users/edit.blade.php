<!-- kil 3ada enadou master mta3na  -->
@extends('layouts.master')

<!-- Appel de la partie de reservation -->
@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <!-- On va créer un formulaire de modification ici tab3i m3aya kifeh bech na3mlou  -->
        <!-- Na9es class hadha eli fih lkol content-wrapper -->
        <!-- C bon ?? ui okii nwaslou tawa khalina nreglou chweya form mta3na tab3ini ok -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                @include('includes.stat')
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modifier un utilisateur</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Utilisateurs</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Fema haja na9sa lahna 3la kater formulaire jay 3a jnab reeti y ? choft okii  -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                    <!-- Houaw kan wakhedh class hadhiii col-md-6 fahmetha ? ??enti badelt 6 bch ja un peu centré
                    non hiya 6 mel lawel ama mesh ja un peu centré zedt class hadhii offset-md-3 pourquoi
                    bien nfaserlek te3rfi bootstrap 7kina 3lih n'est ce âs ey bien 
                    bootstrap yet3amel m3a system de grid fe css, system hadha y3awnek bech t9asmi lpage el des colonnes okii ?? ok
                    bahii bootstrap y9assem lpage bech system de grid el 12 colonnes fe small w medium w large w x-large sizes 
                    ya3ni par kan nekhdmou 7na 3al medium avec ce class col-md-? ?=> dans la place de ce point d'interogation 
                    on peut créer un nombre entier entre 1 et 12 si on met 1 ça signifie que le div qu'on le donne ce class col-md-1 
                    il va trouver 1 colonne si on met 6 il va trouver 6 colonne ou 50% on peut dire puisque 6 et le moitié de 12 
                    okii ok wadh7a lfekra bien mah ?? ui okii en tt cas kan 3emlna des séances css hataw tewdha7 akthar bref  -->
                    <!-- 7na tawa formulaire mta3na wakhedh 50% mel parent div eli houwa fih 7na n7ebouh yakhedh 100% chnouwa na3mlou 
                    bahii mesh 3ena 7na col-md-6 n7otou fe blaset 6 12 yakhedh 100% puisque div m9asem 12 colonnes kima 7kina 
                     -->
                     <!-- Chofti kifeh walla ? ui bien  -->
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <!-- variable $user lahna ma yest7a9ech parcour bel foreach zay ma na3mlou dima tetfakri foreach mah ? ey
                                
                                okii goulili 3lech ma test7a9ech parcour 3ad 😄 walla wahd7a ? 
                                bref hataw nfaserha 
                                $user bech takhedh résultat eli hiya ligne mel base ligne wa7da mech plusieur alors bech tkoun sous cette form 
                                $user  = {name: 'mouheb', email: 'mouhebabdea@gmail.com', nultel:"25641541"}
                                
                                pour accéder à la valeur par exp de name on doit just écrivez comme ça 
                                $user->name claire ?? bien  
                                 url('users/'.$user-id) hadha path eli bech nouslou bih lel fonction update fel controller 
                                 afin de modifier l'user claire a?? ui bien -->
                                <form role="form" action="{{ url('users/'.$user->id) }}" method="post">
                                <!-- bien sûr kima golna kol forulaire fel app lazma clé khas biih bech na3touh clé nektbou la fonction @csrf 
                                shihs walla ? ey bien  -->
                                @csrf
                                <!-- method put hadhi 3lech, hiya method de request zay post wel get mais just pour la modification claire ? ui -->
                                @method('put')
                                <!--puisque on a besoin un path alors on doit le créer, où on peut le créer, on a un systeme de routage dans laravel 
                                nommé route et on peut trouver la liste de paths dans la page web.php, cet page existe dans la dossier route/web.php
                                claire tawa ?? ey bien haya n7elou emala page de routage w nasn3ou path y7el lpage hadhii  -->
                                    <div class="card-body">
                                    <div class="form-group">
                                        <!-- tawa ma n7ebech les inputs ma7loulin 3la toul div kima homa tawa n7eb nsagherhom choufi 
                                        kifeh bech na3mlou  -->
                                            <div class="row">
                                                <!-- Class row hadha yasm7elna bech nesta5dmou les colonnes avec les col-md ... okii ok -->
                                                <div class="col-md-6 offset-md-3">
                                                <!-- Chofti kifeh walla l'input email ?? ey bien les restes sont les même s  -->
                                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                                    <!-- Tawa kol input n7otou fel attribut value mta3a champ eli ynasba 
                                                    zay name par exp bech n7otoula fel value="{{ $user->name }}"  claire ? ui-->
                                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <!-- tawa ma n7ebech les inputs ma7loulin 3la toul div kima homa tawa n7eb nsagherhom choufi 
                                        kifeh bech na3mlou  -->
                                            <div class="row">
                                                <!-- Class row hadha yasm7elna bech nesta5dmou les colonnes avec les col-md ... okii ok -->
                                                <div class="col-md-6 offset-md-3">
                                                <!-- Chofti kifeh walla l'input email ?? ey bien les restes sont les même s  -->
                                                    <label for="exampleInputEmail1">Email d'utilisateur</label>
                                                    <!-- 3arfa 3lech nekteb fe name mahou ?? nn okii 
                                                    name houwa l'attribut mta3 kol input eli najmou nouslou lel valeur 
                                                    zay fel php ki nektbou $_POST['name'] 'name' hadha name mta3 l'input claire ? ui bien on continue -->
                                                    <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <!-- tawa ma n7ebech les inputs ma7loulin 3la toul div kima homa tawa n7eb nsagherhom choufi 
                                        kifeh bech na3mlou  -->
                                            <div class="row">
                                                <!-- Class row hadha yasm7elna bech nesta5dmou les colonnes avec les col-md ... okii ok -->
                                                <div class="col-md-6 offset-md-3">
                                                <!-- Chofti kifeh walla l'input email ?? ey bien les restes sont les même s  -->
                                                    <label for="exampleInputEmail1">Num tèl d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->numtel }}" name="numtel" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <!-- tawa ma n7ebech les inputs ma7loulin 3la toul div kima homa tawa n7eb nsagherhom choufi 
                                        kifeh bech na3mlou  -->
                                            <div class="row">
                                                <!-- Class row hadha yasm7elna bech nesta5dmou les colonnes avec les col-md ... okii ok -->
                                                <div class="col-md-6 offset-md-3">
                                                <!-- Chofti kifeh walla l'input email ?? ey bien les restes sont les même s  -->
                                                    <label for="exampleInputEmail1">adresse d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->adresse }}" name="adresse" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <!-- tawa ma n7ebech les inputs ma7loulin 3la toul div kima homa tawa n7eb nsagherhom choufi 
                                        kifeh bech na3mlou  -->
                                            <div class="row">
                                                <!-- Class row hadha yasm7elna bech nesta5dmou les colonnes avec les col-md ... okii ok -->
                                                <div class="col-md-6 offset-md-3">
                                                <!-- Chofti kifeh walla l'input email ?? ey bien les restes sont les même s  -->
                                                    <label for="exampleInputEmail1">date de recrutement d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->date_recrutement }}" name="date_recrutement" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <!-- tawa ma n7ebech les inputs ma7loulin 3la toul div kima homa tawa n7eb nsagherhom choufi 
                                        kifeh bech na3mlou  -->
                                            <div class="row">
                                                <!-- Class row hadha yasm7elna bech nesta5dmou les colonnes avec les col-md ... okii ok -->
                                                <div class="col-md-6 offset-md-3">
                                                <!-- Chofti kifeh walla l'input email ?? ey bien les restes sont les même s  -->
                                                    <label for="exampleInputEmail1">Grade d'utilisateur</label>
                                                    <input type="text" class="form-control" value="{{ $user->grade }}" name="grade" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- C bon hana kamalnahom lkol ui nwaslou  -->
                                        <!-- nchoufou tawa user ch3enda des champs w kol champ nasn3oulha input lahna afin de le odifier claire ? ui okii -->
                                    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end">
                                        <!-- bien jawha bahii  -->
                                        <!-- C bon hana kol input feha valeur mta3ha claire ? ui bien tawa njarbou nchoufou les inputs bech yet3abou walla  -->
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    <!-- lazem  n7otou button hadhii 3al limin okii ok -->
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