<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // c'est la class de migrations users
    //  User (Id, name, email, password, numtel, adresse,date de recrutement, grade )
    // On a manqué quatre champs n'est ce pas ? nn 3leh ?
    // 3ena numtel w adresse, w date de recrutement w grade ma famech hekka waal ? ey
    // on doit les ajouter comme les autres ey okii
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //name
            $table->string('email')->unique(); //email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); // password
            $table->biginteger('numtel')->nullable(); // numtel prend le type entier long
            $table->string('adresse')->nullable(); // adresse prend le type chaine
            // nullable signifie le champ accepte la valeur null
            $table->date('date_recrutement')->nullable(); // type date
            $table->string('grade'); // type chaine pour le grade
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
    // Si vous avez remarqué qu'on a deux fonctions dans cette classe n'est ce pas ?? uibien
    // function up pour la creation de la table dans la BD
    // function down pour la suppression de la table de la BD claire ?? uihayel barcha
}
