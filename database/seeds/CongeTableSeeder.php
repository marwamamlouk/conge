<?php

use Illuminate\Database\Seeder;

class CongeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Inérer des valuers dans la table conges de la base de donné
        DB::table('conges')->insert([
            [
                "user_id" => 1,
                "date_debut" => "2020-01-13",
                "date_retour" => "2020-01-20",
                "cause" => "maladie",
                "acceptation" => "oui",
            ],
            [
                "user_id" => 1,
                "date_debut" => "2020-02-13",
                "date_retour" => "2020-02-20",
                "cause" => "maladie",
                "acceptation" => "oui",
            ],
            [
                "user_id" => 1,
                "date_debut" => "2020-03-13",
                "date_retour" => "2020-03-20",
                "cause" => "maladie",
                "acceptation" => "oui",
            ],
            
        ]);
    }
}
