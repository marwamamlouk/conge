<?php

use Illuminate\Database\Seeder;
// This is the new seeder class 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // We will use here the predefined class named DB
        // we can access with this class to the tables in our DB without using the models okay ok
        DB::table('users')->insert(
            [

                [
                    "name" => "Mouheb abderrahim",
                    "email" => "mouhebabderra@gmail.com",
                    "adresse" => "rue habib bourghuiba gabes",
                    "password" => "mouheb53",
                    "numtel" => "53966974",
                        "date_recrutement" => "2020-03-10",
                    "grade" => "secretaire",
                    ],
                    [
                        "name" => "Marwa mamlouk",
                        "email" => "mamloukmarwa@yahoo.fr",
                        "adresse" => "rue elfssil  ras jebel",
                        "password" => "moumou",
                        "numtel" => "93993222",
                        "date_recrutement" => "2020-03-10",
                        "grade" => "secretaire",
                        ],
                        // good let's try now to execute this class to insert these values into our table okay ok
                        // Okay is that clear now ?? okay let's create a controller now to send the data to the view 
            ]
            // Hana deja esta3melnaha 7na 😄 chofti kifeh mesh mlawnin 3endi les emojis ey hhh dholm hadha hhhhhhhh 😏 hhhhhhh
            // Haya misalech rabi yehdih w hkhw hhhhh :p bien let's continue 
            // Nemshou tawa n'executou seeder hadha bech n3abou table w lazem nesta3mlou lcommande hadhii 
                        // php artisan seed:db okii ok
    );
    }
}
