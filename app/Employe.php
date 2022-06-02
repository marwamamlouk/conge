<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// C'est la model Employe
class Employe extends Model
{
    //
    protected $primaryKey = 'cin';
    //Ici une autre fonction pour cet model
    public function user(){
        return $this->belongsTo(User::class); // Employe appartient à un seul utilisateur tawa lfonction
        // On peut l'utiliser de faire accéder à les autre attribut de ce employe dans le views okii ok
    }
}
