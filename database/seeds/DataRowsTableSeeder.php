<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 1,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            1 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 2,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            2 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Email',
                'edit' => 1,
                'field' => 'email',
                'id' => 3,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            3 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Password',
                'edit' => 1,
                'field' => 'password',
                'id' => 4,
                'order' => 4,
                'read' => 0,
                'required' => 1,
                'type' => 'password',
            ),
            4 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Remember Token',
                'edit' => 0,
                'field' => 'remember_token',
                'id' => 5,
                'order' => 5,
                'read' => 0,
                'required' => 0,
                'type' => 'text',
            ),
            5 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 6,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            6 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 7,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            7 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Avatar',
                'edit' => 1,
                'field' => 'avatar',
                'id' => 8,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            8 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}',
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'user_belongsto_role_relationship',
                'id' => 9,
                'order' => 10,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            9 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'display_name' => 'Roles',
                'edit' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'id' => 10,
                'order' => 11,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            10 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Settings',
                'edit' => 0,
                'field' => 'settings',
                'id' => 11,
                'order' => 12,
                'read' => 0,
                'required' => 0,
                'type' => 'hidden',
            ),
            11 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 12,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            12 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 2,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 13,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            13 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 14,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            14 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 15,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            15 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 16,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            16 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 17,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            17 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 18,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            18 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 19,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            19 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Display Name',
                'edit' => 1,
                'field' => 'display_name',
                'id' => 20,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            20 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'role_id',
                'id' => 21,
                'order' => 9,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            21 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 22,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            22 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'User Type',
                'edit' => 1,
                'field' => 'user_type',
                'id' => 23,
                'order' => 2,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            23 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'User Id',
                'edit' => 1,
                'field' => 'user_id',
                'id' => 24,
                'order' => 3,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            24 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Event',
                'edit' => 1,
                'field' => 'event',
                'id' => 25,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            25 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Auditable Type',
                'edit' => 1,
                'field' => 'auditable_type',
                'id' => 26,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            26 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Auditable Id',
                'edit' => 1,
                'field' => 'auditable_id',
                'id' => 27,
                'order' => 6,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            27 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Old Values',
                'edit' => 1,
                'field' => 'old_values',
                'id' => 28,
                'order' => 7,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            28 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'New Values',
                'edit' => 1,
                'field' => 'new_values',
                'id' => 29,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            29 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Url',
                'edit' => 1,
                'field' => 'url',
                'id' => 30,
                'order' => 9,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            30 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Ip Address',
                'edit' => 1,
                'field' => 'ip_address',
                'id' => 31,
                'order' => 10,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            31 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'User Agent',
                'edit' => 1,
                'field' => 'user_agent',
                'id' => 32,
                'order' => 11,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            32 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Tags',
                'edit' => 1,
                'field' => 'tags',
                'id' => 33,
                'order' => 12,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            33 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 1,
                'field' => 'created_at',
                'id' => 34,
                'order' => 13,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            34 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 35,
                'order' => 14,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            35 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 7,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 36,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            36 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 7,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'No',
                'edit' => 1,
                'field' => 'No_',
                'id' => 37,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            37 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 7,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'Name',
                'id' => 38,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            38 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 7,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Income Balance',
                'edit' => 1,
                'field' => 'Income_Balance',
                'id' => 39,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            39 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 7,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Account Type',
                'edit' => 1,
                'field' => 'Account_type',
                'id' => 40,
                'order' => 6,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            40 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 7,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Category Id',
                'edit' => 1,
                'field' => 'category_id',
                'id' => 41,
                'order' => 2,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            41 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 7,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 42,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            42 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 7,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 43,
                'order' => 8,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            43 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 7,
                'delete' => 1,
                'details' => '{"model":"App\\\\Model\\\\GL_SubCategory","table":"g_l__sub_categories","type":"belongsTo","column":"category_id","key":"id","label":"name","pivot_table":"audits","pivot":"0","taggable":null}',
                'display_name' => 'g_l__sub_categories',
                'edit' => 1,
                'field' => 'g_l__account_belongsto_g_l__sub_category_relationship',
                'id' => 44,
                'order' => 9,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            44 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 45,
                'order' => 1,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            45 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 46,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            46 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Order',
                'edit' => 1,
                'field' => 'order',
                'id' => 47,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'number',
            ),
            47 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Formula',
                'edit' => 1,
                'field' => 'formula',
                'id' => 48,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            48 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Additional Formula',
                'edit' => 1,
                'field' => 'additional_formula',
                'id' => 49,
                'order' => 5,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            49 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 50,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            50 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 51,
                'order' => 7,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            51 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 52,
                'order' => 1,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            52 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 53,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            53 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Order',
                'edit' => 1,
                'field' => 'order',
                'id' => 54,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            54 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Formula',
                'edit' => 1,
                'field' => 'formula',
                'id' => 55,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            55 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Additional Formula',
                'edit' => 1,
                'field' => 'additional_formula',
                'id' => 56,
                'order' => 5,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            56 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 11,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 57,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            57 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 11,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 58,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            58 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 13,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 59,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            59 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 13,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Key',
                'edit' => 1,
                'field' => 'key',
                'id' => 60,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            60 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 13,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Table Name',
                'edit' => 1,
                'field' => 'table_name',
                'id' => 61,
                'order' => 3,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            61 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 13,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 62,
                'order' => 4,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            62 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 13,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 63,
                'order' => 5,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            63 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 14,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 64,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            64 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 14,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 65,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            65 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 14,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 66,
                'order' => 3,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            66 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 14,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 67,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            67 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{"model":"App\\\\Model\\\\ReportType","table":"report_types","type":"belongsTo","column":"report_type_id","key":"id","label":"name","pivot_table":"audits","pivot":"0","taggable":"0"}',
                'display_name' => 'report_types',
                'edit' => 1,
                'field' => 'g_l__category_belongsto_report_type_relationship',
                'id' => 68,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            68 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Report Type Id',
                'edit' => 1,
                'field' => 'report_type_id',
                'id' => 69,
                'order' => 8,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            69 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{"model":"App\\\\Model\\\\GL_Category","table":"g_l__categories","type":"belongsTo","column":"category_id","key":"id","label":"name","pivot_table":"audits","pivot":"0","taggable":"0"}',
                'display_name' => 'g_l__categories',
                'edit' => 1,
                'field' => 'g_l__sub_category_belongsto_g_l__category_relationship',
                'id' => 70,
                'order' => 9,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            70 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Category Id',
                'edit' => 1,
                'field' => 'category_id',
                'id' => 71,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
        ));
        
        
    }
}