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
            3 => 
            array (
                'id' => 4,
                'name' => 'Biaya Utility, Stationary, Sewa, Maintenance',
                'order' => 400,
                'formula' => '24+25+26+27+28+29+30+31',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:03:42',
                'updated_at' => '2021-04-10 06:03:42',
                'report_type_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Biaya Kendaraan dan Travelling',
                'order' => 500,
                'formula' => '32+33+34',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:06:01',
                'updated_at' => '2021-04-10 06:06:01',
                'report_type_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Biaya Legal, entertainment, konsultan, adm, dll',
                'order' => 600,
                'formula' => '35+36+37+38+39+40',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:09:05',
                'updated_at' => '2021-04-10 06:09:05',
                'report_type_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
            'name' => 'Biaya Lain Lain (Bank, pajak, tunjangan)',
                'order' => 700,
                'formula' => '41+42+43+44+45',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:10:54',
                'updated_at' => '2021-04-10 06:10:54',
                'report_type_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Total Biaya Operasional dan Lain-Lain',
                'order' => 800,
                'formula' => '2+3+4+5+6+7+8',
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 06:13:16',
                'updated_at' => '2021-04-10 06:14:01',
                'report_type_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Laba Bersih Sebelum Pajak',
                'order' => 900,
                'formula' => '1-8',
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 06:14:42',
                'updated_at' => '2021-04-10 06:14:42',
                'report_type_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Biaya Pajak',
                'order' => 1000,
                'formula' => '46',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 07:38:56',
                'updated_at' => '2021-04-10 07:38:56',
                'report_type_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Estimasi Pajak',
                'order' => 1100,
                'formula' => '1-2-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18-19-20-21-22-23-24-25-26-27-28-29-30-32-33-34-36-39-40',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 08:20:57',
                'updated_at' => '2021-04-10 08:20:57',
                'report_type_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Laba bersih setelah pajak',
                'order' => 1200,
                'formula' => '9-10-11',
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 08:46:23',
                'updated_at' => '2021-04-10 08:46:23',
                'report_type_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Total Cash & Bank',
                'order' => 100,
                'formula' => '48+49+50',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 09:54:50',
                'updated_at' => '2021-04-10 09:54:50',
                'report_type_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Total Piutang',
                'order' => 200,
                'formula' => '51+52+53+54+55+56+57',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:23:45',
                'updated_at' => '2021-04-10 10:23:45',
                'report_type_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Persediaan',
                'order' => 300,
                'formula' => '58',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:27:41',
                'updated_at' => '2021-04-10 10:28:24',
                'report_type_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Total Uang Muka & Beban Dibayar Dimuka',
                'order' => 400,
                'formula' => '59+60+61+62',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:29:10',
                'updated_at' => '2021-04-10 10:29:10',
                'report_type_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Total Pajak Dibayar Dimuka',
                'order' => 500,
                'formula' => '63+64+65+66+67',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:32:51',
                'updated_at' => '2021-04-10 10:32:51',
                'report_type_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Total Investasi & Aktiva Tetap',
                'order' => 600,
                'formula' => '68+69+70+71+72+73+74+75+76+77+78+79+80+81+82+83',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:35:08',
                'updated_at' => '2021-04-10 16:23:20',
                'report_type_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Total Assets',
                'order' => 700,
                'formula' => '13+14+15+16+17+18',
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 10:38:46',
                'updated_at' => '2021-04-10 10:38:46',
                'report_type_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Total Hutang Jangka Pendek',
                'order' => 800,
                'formula' => '84+85+86+87+88+89',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:42:34',
                'updated_at' => '2021-04-10 10:42:34',
                'report_type_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Total Hutang Pajak',
                'order' => 900,
                'formula' => '90+91+92+93+94',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:44:16',
                'updated_at' => '2021-04-10 10:44:16',
                'report_type_id' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Total Capital',
                'order' => 1000,
                'formula' => '95+96+97',
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:46:16',
                'updated_at' => '2021-04-10 10:46:16',
                'report_type_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Total Capital & Liabilities',
                'order' => 1100,
                'formula' => '20+21+22',
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 11:12:15',
                'updated_at' => '2021-04-10 11:12:15',
                'report_type_id' => 2,
            ),
        ));
        
        
    }
}