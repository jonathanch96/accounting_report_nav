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
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-04-06 09:29:51',
                'updated_at' => '2021-04-06 09:29:51',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'audits',
                'slug' => 'audits',
                'display_name_singular' => 'Audit',
                'display_name_plural' => 'Audits',
                'icon' => 'voyager-search',
                'model_name' => 'App\\Model\\Audit',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-04-06 09:52:04',
                'updated_at' => '2021-04-06 09:52:04',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'g_l__accounts',
                'slug' => 'g-l-accounts',
                'display_name_singular' => 'GL  Account',
                'display_name_plural' => 'GL  Accounts',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Model\\GL_Account',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\GLAccountController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"No_","order_display_column":"No_","order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-04-06 12:14:59',
                'updated_at' => '2021-04-06 12:14:59',
            ),
        ));
        
        
    }
}