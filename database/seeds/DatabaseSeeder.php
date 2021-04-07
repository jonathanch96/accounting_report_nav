<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(GLCategoriesTableSeeder::class);
        $this->call(GLAccountsTableSeeder::class);
        $this->call(GLSubCategoriesTableSeeder::class);
        $this->call(GLCategoryMappingsTableSeeder::class);
        $this->call(GLSubCategoryMappingsTableSeeder::class);
    }
}