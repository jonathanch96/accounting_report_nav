<?php


use Illuminate\Database\Seeder;

class GLCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('g_l__categories')->delete();
        
        \DB::table('g_l__categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gross Profit',
                'order' => 1,
                'formula' => '1-2-3-4',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-08 10:05:17',
                'updated_at' => '2021-04-08 10:05:17',
                'report_type_id' => 1,
            ),
        ));
        
        
    }
}