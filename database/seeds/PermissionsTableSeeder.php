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
                'created_at' => '2021-04-06 09:29:51',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2021-04-06 09:29:51',
            ),
            1 => 
            array (
                'created_at' => '2021-04-06 09:29:51',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2021-04-06 09:29:51',
            ),
            2 => 
            array (
                'created_at' => '2021-04-06 09:29:51',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2021-04-06 09:29:51',
            ),
            3 => 
            array (
                'created_at' => '2021-04-06 09:29:51',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2021-04-06 09:29:51',
            ),
            4 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2021-04-06 09:29:52',
            ),
            5 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            6 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            7 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            8 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            9 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            10 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            11 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            12 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            13 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            14 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            15 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            16 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            17 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            18 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            19 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            20 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            21 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            22 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            23 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            24 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-04-06 09:29:52',
            ),
            25 => 
            array (
                'created_at' => '2021-04-06 09:29:52',
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2021-04-06 09:29:52',
            ),
            26 => 
            array (
                'created_at' => '2021-04-06 09:52:04',
                'id' => 27,
                'key' => 'browse_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            27 => 
            array (
                'created_at' => '2021-04-06 09:52:04',
                'id' => 28,
                'key' => 'read_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            28 => 
            array (
                'created_at' => '2021-04-06 09:52:04',
                'id' => 29,
                'key' => 'edit_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            29 => 
            array (
                'created_at' => '2021-04-06 09:52:04',
                'id' => 30,
                'key' => 'add_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            30 => 
            array (
                'created_at' => '2021-04-06 09:52:04',
                'id' => 31,
                'key' => 'delete_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            31 => 
            array (
                'created_at' => '2021-04-06 12:14:59',
                'id' => 32,
                'key' => 'browse_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            32 => 
            array (
                'created_at' => '2021-04-06 12:14:59',
                'id' => 33,
                'key' => 'read_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            33 => 
            array (
                'created_at' => '2021-04-06 12:14:59',
                'id' => 34,
                'key' => 'edit_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            34 => 
            array (
                'created_at' => '2021-04-06 12:14:59',
                'id' => 35,
                'key' => 'add_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            35 => 
            array (
                'created_at' => '2021-04-06 12:14:59',
                'id' => 36,
                'key' => 'delete_g_l__accounts',
                'table_name' => 'g_l__accounts',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            36 => 
            array (
                'created_at' => '2021-04-07 06:04:56',
                'id' => 37,
                'key' => 'browse_g_l__sub_categories',
                'table_name' => 'g_l__sub_categories',
                'updated_at' => '2021-04-07 06:04:56',
            ),
            37 => 
            array (
                'created_at' => '2021-04-07 06:04:56',
                'id' => 38,
                'key' => 'read_g_l__sub_categories',
                'table_name' => 'g_l__sub_categories',
                'updated_at' => '2021-04-07 06:04:56',
            ),
            38 => 
            array (
                'created_at' => '2021-04-07 06:04:56',
                'id' => 39,
                'key' => 'edit_g_l__sub_categories',
                'table_name' => 'g_l__sub_categories',
                'updated_at' => '2021-04-07 06:04:56',
            ),
            39 => 
            array (
                'created_at' => '2021-04-07 06:04:56',
                'id' => 40,
                'key' => 'add_g_l__sub_categories',
                'table_name' => 'g_l__sub_categories',
                'updated_at' => '2021-04-07 06:04:56',
            ),
            40 => 
            array (
                'created_at' => '2021-04-07 06:04:56',
                'id' => 41,
                'key' => 'delete_g_l__sub_categories',
                'table_name' => 'g_l__sub_categories',
                'updated_at' => '2021-04-07 06:04:56',
            ),
            41 => 
            array (
                'created_at' => '2021-04-07 12:14:47',
                'id' => 42,
                'key' => 'browse_g_l__categories',
                'table_name' => 'g_l__categories',
                'updated_at' => '2021-04-07 12:14:47',
            ),
            42 => 
            array (
                'created_at' => '2021-04-07 12:14:47',
                'id' => 43,
                'key' => 'read_g_l__categories',
                'table_name' => 'g_l__categories',
                'updated_at' => '2021-04-07 12:14:47',
            ),
            43 => 
            array (
                'created_at' => '2021-04-07 12:14:47',
                'id' => 44,
                'key' => 'edit_g_l__categories',
                'table_name' => 'g_l__categories',
                'updated_at' => '2021-04-07 12:14:47',
            ),
            44 => 
            array (
                'created_at' => '2021-04-07 12:14:47',
                'id' => 45,
                'key' => 'add_g_l__categories',
                'table_name' => 'g_l__categories',
                'updated_at' => '2021-04-07 12:14:47',
            ),
            45 => 
            array (
                'created_at' => '2021-04-07 12:14:47',
                'id' => 46,
                'key' => 'delete_g_l__categories',
                'table_name' => 'g_l__categories',
                'updated_at' => '2021-04-07 12:14:47',
            ),
            46 => 
            array (
                'created_at' => '2021-04-07 12:22:29',
                'id' => 47,
                'key' => 'browse_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-04-07 12:22:29',
            ),
            47 => 
            array (
                'created_at' => '2021-04-07 12:22:29',
                'id' => 48,
                'key' => 'read_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-04-07 12:22:29',
            ),
            48 => 
            array (
                'created_at' => '2021-04-07 12:22:29',
                'id' => 49,
                'key' => 'edit_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-04-07 12:22:29',
            ),
            49 => 
            array (
                'created_at' => '2021-04-07 12:22:29',
                'id' => 50,
                'key' => 'add_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-04-07 12:22:29',
            ),
            50 => 
            array (
                'created_at' => '2021-04-07 12:22:29',
                'id' => 51,
                'key' => 'delete_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-04-07 12:22:29',
            ),
            51 => 
            array (
                'created_at' => '2021-04-07 12:25:37',
                'id' => 52,
                'key' => 'browse_pl_report',
                'table_name' => NULL,
                'updated_at' => '2021-04-07 12:25:37',
            ),
            52 => 
            array (
                'created_at' => '2021-04-08 10:00:38',
                'id' => 53,
                'key' => 'browse_report_types',
                'table_name' => 'report_types',
                'updated_at' => '2021-04-08 10:00:38',
            ),
            53 => 
            array (
                'created_at' => '2021-04-08 10:00:38',
                'id' => 54,
                'key' => 'read_report_types',
                'table_name' => 'report_types',
                'updated_at' => '2021-04-08 10:00:38',
            ),
            54 => 
            array (
                'created_at' => '2021-04-08 10:00:38',
                'id' => 55,
                'key' => 'edit_report_types',
                'table_name' => 'report_types',
                'updated_at' => '2021-04-08 10:00:38',
            ),
            55 => 
            array (
                'created_at' => '2021-04-08 10:00:38',
                'id' => 56,
                'key' => 'add_report_types',
                'table_name' => 'report_types',
                'updated_at' => '2021-04-08 10:00:38',
            ),
            56 => 
            array (
                'created_at' => '2021-04-08 10:00:38',
                'id' => 57,
                'key' => 'delete_report_types',
                'table_name' => 'report_types',
                'updated_at' => '2021-04-08 10:00:38',
            ),
            57 => 
            array (
                'created_at' => '2021-04-10 09:36:49',
                'id' => 58,
                'key' => 'browse_bs_report',
                'table_name' => NULL,
                'updated_at' => '2021-04-10 09:36:49',
            ),
        ));
        
        
    }
}