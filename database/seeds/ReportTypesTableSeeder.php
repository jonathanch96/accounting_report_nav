<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReportTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('report_types')->delete();
        
        \DB::table('report_types')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-08 10:00:58',
                'id' => 1,
                'name' => 'Profit/Loss',
                'updated_at' => '2021-04-08 10:00:58',
            ),
            1 => 
            array (
                'created_at' => '2021-04-08 10:01:04',
                'id' => 2,
                'name' => 'Balance Sheet',
                'updated_at' => '2021-04-08 10:01:04',
            ),
        ));
        
        
    }
}