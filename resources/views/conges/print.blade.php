<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/print.css') }}">
</head>
<body onload="window.print()">
        <h2>Liste de congés</h2>
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th >ID</th>
                <th>Nom d'employé</th>
                <th >Date debut</th>
                <th >date retour</th>
                <th >cause</th>
                <th >acceptation</th>
            </tr>
            @foreach($conges as $conge)
            <tr>
                <td>{{ $conge->id }}</td>
                <td>{{ $conge->user->name }}</td>
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
            </tr>
            @endforeach
        </table>
</body>
</html>