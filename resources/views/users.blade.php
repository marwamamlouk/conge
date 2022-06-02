<!-- Now we will make here our design of the table  -->
<!-- We need here before all to set the links of bootstrap files to use it  -->
<!-- How we will do that, we will create new views and we will name it like layouts.balde.php -->
<!-- we will import here the layouts file  -->
@extends('layouts')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Num tel</th>
                        <th scope="col">adresse</th>
                        <th scope="col">date de recrutement</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- We will display now here the result of the function index using the variable users  -->
                    <!-- We must to go through an array and display its values  -->
                    <!-- I mean , on doit parcourir le tableau retourner de la fonction index okiii ok -->
                    @foreach($users as $user)
                    <!-- The variable $user get the result of $users row by row and display them  -->
                    <!-- For example if the variable $users has 3 rows, the $user willget the first and display it
                    then the second and display it, the same wit th last row clear ?? yes good  -->

                        <tr>
                        <!-- each row has attributs like name, email adresse etc .... okii ok good  -->
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->numtel }}</td>
                            <td>{{ $user->adresse }}</td>
                            <td>{{ $user->date_recrutement }}</td>
                        </tr>
                    @endforeach
                    </tbody> <!-- this is the end of the foreach loop okii ok is taht all clear now ? yes bahi barcha  -->
                    <!-- You understand this parcour ?? no 3endek l7a9 :p hhhhh  -->
                    <!-- Let's show the result now in the browser together  -->
                </table>

            </div>
        </div>
    </div>
@endsection
