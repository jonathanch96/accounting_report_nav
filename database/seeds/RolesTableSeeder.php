<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-06 09:29:51',
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            1 => 
            array (
                'created_at' => '2021-04-06 09:29:51',
                'display_name' => 'Normal User',
                'id' => 2,
                'name' => 'user',
                'updated_at' => '2021-04-06 09:29:51',
            ),
        ));
        
        
    }
}