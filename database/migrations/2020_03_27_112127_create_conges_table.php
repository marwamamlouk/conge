<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Congé (Id, user_id, date_début, date_retour, motif, acceptation)
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned()->index();
            $table->date('date_debut');
            $table->date('date_retour');
            $table->text('cause');
            $table->string('acceptation')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // is that all clear ?? yes good 
            // Am I explained to you what is the rule of the function up and function down no ? 
            // no proble okay I will explain it ok okay hadhii
            // so, the function up used for creating the table or adding it to the database okay ok 
            // the function down is used to removing table from the database okay ok good  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // if you noticed here the function is dropIfExist ? what does mean ? can you explain it in one sentence ? 
        // enregistrer et quitter la table? non c'est pas ça 
        // Follow me, ok, drop means in frensh => supprimer 
        // if exsit means => si existe, now how to explain this in one sentence 
        // We say here to the program if you get table with the name conges in database then drop it okay ?? ok
        // Now if we want to replace this function with the mysql queries it will be like this below 
        // drop table conges ?? are you understand ?? pourquoi on la supprime?
        // We will not delete it anyway, but just if we write a specific command in the cmd this command is 
        // php artisan migrate:rollback => this command will execute this function okay ? ok good  
        Schema::dropIfExists('conges');
    }
}
