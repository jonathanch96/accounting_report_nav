<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2021-04-06 09:29:51',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2021-04-06 09:29:51',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2021-04-06 09:29:51',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-04-06 09:52:04',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Audits',
                'display_name_singular' => 'Audit',
                'generate_permissions' => 1,
                'icon' => 'voyager-search',
                'id' => 5,
                'model_name' => 'App\\Model\\Audit',
                'name' => 'audits',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'audits',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            4 => 
            array (
                'controller' => 'App\\Http\\Controllers\\Voyager\\GLAccountController',
                'created_at' => '2021-04-06 12:14:59',
                'description' => NULL,
                'details' => '{"order_column":"No_","order_display_column":"No_","order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'GL  Accounts',
                'display_name_singular' => 'GL  Account',
                'generate_permissions' => 1,
                'icon' => 'voyager-documentation',
                'id' => 7,
                'model_name' => 'App\\Model\\GL_Account',
                'name' => 'g_l__accounts',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'g-l-accounts',
                'updated_at' => '2021-04-06 12:14:59',
            ),
            5 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-04-07 06:04:56',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'GL  Sub Categories',
                'display_name_singular' => 'GL  Sub Category',
                'generate_permissions' => 1,
                'icon' => 'voyager-folder',
                'id' => 9,
                'model_name' => 'App\\Model\\GL_SubCategory',
                'name' => 'g_l__sub_categories',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'g-l-sub-categories',
                'updated_at' => '2021-04-08 12:08:50',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-04-07 12:14:47',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'GL  Categories',
                'display_name_singular' => 'GL  Category',
                'generate_permissions' => 1,
                'icon' => 'voyager-folder',
                'id' => 11,
                'model_name' => 'App\\Model\\GL_Category',
                'name' => 'g_l__categories',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'g-l-categories',
                'updated_at' => '2021-04-08 10:04:15',
            ),
            7 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-04-07 12:22:29',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Permissions',
                'display_name_singular' => 'Permission',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 13,
                'model_name' => 'App\\Model\\Permission',
                'name' => 'permissions',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'permissions',
                'updated_at' => '2021-04-07 12:22:29',
            ),
            8 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-04-08 10:00:38',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Report Types',
                'display_name_singular' => 'Report Type',
                'generate_permissions' => 1,
                'icon' => 'voyager-news',
                'id' => 14,
                'model_name' => 'App\\Model\\ReportType',
                'name' => 'report_types',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'report-types',
                'updated_at' => '2021-04-08 10:00:38',
            ),
        ));
        
        
    }
}