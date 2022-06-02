<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//  c'est la migration okii ok bien 
class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Employes(Id, user_id, etat, solde)
        Schema::create('employes', function (Blueprint $table) {
            $table->biginteger('cin')->primary();
            $table->biginteger('user_id')->unsigned()->index();
            $table->string('etat');
            $table->integer('solde');
            $table->string('profession');
            $table->string('type_contrat')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('employes');
    }
}
