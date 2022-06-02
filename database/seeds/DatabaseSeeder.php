<?php

use Illuminate\Database\Seeder;
// This class to execute all the seeders that we have 
// 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // We must create new seeder class for this table okay UsersTableSeeder
        // this file clear 
        // N3abou table user gbal esa3a 
        // TAaw n3abou table employe
        //  $this->call(EmployesTableSeeder::class);

        DB::table('users')->insert([
            [
                "name" => "Marwa ",
                "email" => "admin@gmail.com",
                "numtel" => 22555333,
                "adresse" => "tunis",
                "grade" => "agent administratif",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
    }
}
