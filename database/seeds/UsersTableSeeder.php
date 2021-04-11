<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Jonathan',
                'email' => 'jonathanchang96@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CbTyAjd/G.bSRdYcHjvIxu9yAlxPCWg.asgiXqViWmUZ6NJiXROLO',
                'remember_token' => 'OWrriZtqPgCy3P72ucvHTQXfSSO0dWxMqukYXdjE1i1P5pr7ZsEouj3hWDHN',
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Fenny Sadeli',
                'email' => 'fenny_sadeli@yahoo.co.id',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e6e9pCOHVwd1O.LonRmxuui7uEL0y5NVnaLBBS3rbx1vaTV2/Gofq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Heru Chandra',
                'email' => 'heru@grahacitrapratama.co.id',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T7Ufa0n46NEmnEDF0.w3meqrJAWpdMQgWSpL4maimjsCY0Z2retcy',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Daniel Tanuwidjaja',
                'email' => 'daniel.bdelta@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VFvLnXRwoDUleqDkKBV7NuQ0cPqjk1IS2iyiSD06c.vQopnjdTuRW',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Jeanny Tanuwidjaja',
                'email' => 'jeannytan2019@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kvNEzbOPpla9AT9lR0APWePaZdWiichrBPBIynnjrgWHmskQq3.nC',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'name' => 'Eina Yenny Tayu',
                'email' => 'by_6771@yahoo.co.id',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KxopZ5ODTwp2TsAyy3n6LOKyX8WlQL0fKen9mA3QnNXpzBV92hl8G',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}