<?php

use Illuminate\Database\Seeder;

class EmployesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ici on va ajouter des lignes dans la table emploeys sorry
        // DB est une classe fih fonction esmha table ta9bal comme parameter esm table 
        // kife maktoub fel base de donné okii ok puisque db faire l'accé à la base de doonné 
        // DB => DataBase 
        // Syntaxe ghalet w barra {} hadhom zaydin kanou
        // bien n7elou l'app tawa 
        DB::table('employes')->insert(
            [
                [
                    "user_id" => 1,
                    "etat" => "congé",
                    "solde" => 5,
                    "profession" => "agent administratif"
                ],
                [
                    "user_id" => 2,
                    "etat" => "travail",
                    "solde" => 5,
                    "profession" => "Secretaire"
                ],
                
            ]
            );
    }
}
