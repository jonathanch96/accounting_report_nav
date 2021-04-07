<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-04-06 09:29:52',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_audits',
                'table_name' => 'audits',
                'created_at' => '2021-04-06 09:52:04',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_audits',
                'table_name' => 'audits',
                'created_at' => '2021-04-06 09:52:04',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_audits',
                'table_name' => 'audits',
                'created_at' => '2021-04-06 09:52:04',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_audits',
                'table_name' => 'audits',
                'created_at' => '2021-04-06 09:52:04',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_audits',
                'table_name' => 'audits',
                'created_at' => '2021-04-06 09:52:04',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'created_at' => '2021-04-06 12:14:59',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'created_at' => '2021-04-06 12:14:59',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'created_at' => '2021-04-06 12:14:59',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'created_at' => '2021-04-06 12:14:59',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'created_at' => '2021-04-06 12:14:59',
                'updated_at' => '2021-04-06 12:14:59',
            ),
        ));
        
        
    }
}