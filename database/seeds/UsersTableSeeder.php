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
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'email' => 'jonathanchang96@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Jonathan',
                'password' => '$2y$10$CbTyAjd/G.bSRdYcHjvIxu9yAlxPCWg.asgiXqViWmUZ6NJiXROLO',
                'remember_token' => 'OWrriZtqPgCy3P72ucvHTQXfSSO0dWxMqukYXdjE1i1P5pr7ZsEouj3hWDHN',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'email' => 'fenny_sadeli@yahoo.co.id',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Fenny Sadeli',
                'password' => '$2y$10$e6e9pCOHVwd1O.LonRmxuui7uEL0y5NVnaLBBS3rbx1vaTV2/Gofq',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'email' => 'heru@grahacitrapratama.co.id',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'Heru Chandra',
                'password' => '$2y$10$T7Ufa0n46NEmnEDF0.w3meqrJAWpdMQgWSpL4maimjsCY0Z2retcy',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'email' => 'daniel.bdelta@gmail.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'Daniel Tanuwidjaja',
                'password' => '$2y$10$VFvLnXRwoDUleqDkKBV7NuQ0cPqjk1IS2iyiSD06c.vQopnjdTuRW',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'email' => 'jeannytan2019@gmail.com',
                'email_verified_at' => NULL,
                'id' => 5,
                'name' => 'Jeanny Tanuwidjaja',
                'password' => '$2y$10$kvNEzbOPpla9AT9lR0APWePaZdWiichrBPBIynnjrgWHmskQq3.nC',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'email' => 'yennytayu@gmail.com',
                'email_verified_at' => NULL,
                'id' => 6,
                'name' => 'Eina Yenny Tayu',
                'password' => '$2y$10$jBA8/FAHWDvPTvzG.z6CceSqknZ2HSnXPxFSe/Jr6EILX8WhSrjKe',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => '{"locale":"en"}',
                'updated_at' => '2021-04-12 02:36:42',
            ),
        ));
        
        
    }
}