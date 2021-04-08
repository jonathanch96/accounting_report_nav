<?php


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
        ));
        
        
    }
}