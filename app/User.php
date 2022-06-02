<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// C'est la première model nommé User 
// L'emplcaement de ce fichier namespace App; calire oui bien
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // On doit ajouter l'attribut grade dans cette liste afin de l'accéder 
    // Si non laravel ma ykhalinech hhh :p ok okii 
    protected $fillable = [
        'name', 'email', 'password', 'grade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // sahetii 
    // Here now we will create a function to do the relation of this model with the model conge okay ??
    //follow me 
    public function conge(){
        // we must named the function like the name of the table that this model has a relatio with it okay ok
        // Since we have a relation with conges table then we named this function conge 
        return $this->hasMany(Conge::class); // This user model has one Conge okay ok good 
        // $this => means this model (User) okay ok
        // hasOne is predefined function created by laravel that allow us to make a relation of type one to one okay ok
        // now we created Conge::class that means the model or the name of model that this model user has a relation with it okay 
        // Have you understand this line of code ?no okay 
    }
    // Ma kamalnech les relations 7na sar fibali 3melnahom bref na3mlouhom tawa choufi 
    // La relation entre employe et user est un à un okii ey bien 
    public function employe(){
        return $this->hasOne(Employe::class); //golna lahna lel model user rahou 3endek l7a9 fe employe wa7ed el kol ligne 3endek fe table okiiok
    }
}
