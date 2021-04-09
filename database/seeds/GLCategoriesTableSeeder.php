<?php

namespace Database\Seeders;

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
                'order' => 100,
                'formula' => '1-2-3-4',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-08 10:05:17',
                'updated_at' => '2021-04-09 07:44:16',
                'report_type_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Biaya Promosi & Penjualan',
                'order' => 200,
                'formula' => '5+6+7+8+9+10+11+12+13',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-09 07:44:02',
                'updated_at' => '2021-04-09 07:44:02',
                'report_type_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Biaya Gaji',
                'order' => 300,
                'formula' => '14+15+16+17+18+19+20+21+22+23',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-09 12:28:29',
                'updated_at' => '2021-04-09 12:28:29',
                'report_type_id' => 1,
            ),
        ));
        
        
    }
}