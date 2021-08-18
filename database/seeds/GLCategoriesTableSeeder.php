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
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-08 10:05:17',
                'formula' => '1-2-3-4',
                'id' => 1,
                'name' => 'Gross Profit',
                'order' => 100,
                'report_type_id' => 1,
                'updated_at' => '2021-04-09 07:44:16',
            ),
            1 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-09 07:44:02',
                'formula' => '5+6+7+8+9+10+11+12+13',
                'id' => 2,
                'name' => 'Biaya Promosi & Penjualan',
                'order' => 200,
                'report_type_id' => 1,
                'updated_at' => '2021-04-09 07:44:02',
            ),
            2 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-09 12:28:29',
                'formula' => '14+15+16+17+18+19+20+21+22+23',
                'id' => 3,
                'name' => 'Biaya Gaji',
                'order' => 300,
                'report_type_id' => 1,
                'updated_at' => '2021-04-09 12:28:29',
            ),
            3 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:03:42',
                'formula' => '24+25+26+27+28+29+30+31',
                'id' => 4,
                'name' => 'Biaya Utility, Stationary, Sewa, Maintenance',
                'order' => 400,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 06:03:42',
            ),
            4 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:06:01',
                'formula' => '32+33+34',
                'id' => 5,
                'name' => 'Biaya Kendaraan dan Travelling',
                'order' => 500,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 06:06:01',
            ),
            5 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:09:05',
                'formula' => '35+36+37+38+39+40',
                'id' => 6,
                'name' => 'Biaya Legal, entertainment, konsultan, adm, dll',
                'order' => 600,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 06:09:05',
            ),
            6 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 06:10:54',
                'formula' => '41+42+43+44+45',
                'id' => 7,
            'name' => 'Biaya Lain Lain (Bank, pajak, tunjangan)',
                'order' => 700,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 06:10:54',
            ),
            7 => 
            array (
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 06:13:16',
                'formula' => '2+3+4+5+6+7+8',
                'id' => 8,
                'name' => 'Total Biaya Operasional dan Lain-Lain',
                'order' => 800,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 06:14:01',
            ),
            8 => 
            array (
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 06:14:42',
                'formula' => '1-8',
                'id' => 9,
                'name' => 'Laba Bersih Sebelum Pajak',
                'order' => 900,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 06:14:42',
            ),
            9 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 07:38:56',
                'formula' => '46',
                'id' => 10,
                'name' => 'Biaya Pajak',
                'order' => 1000,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 07:38:56',
            ),
            10 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 08:20:57',
                'formula' => '1-2-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18-19-20-21-22-23-24-25-26-27-28-29-30-32-33-34-36-39-40',
                'id' => 11,
                'name' => 'Estimasi Pajak',
                'order' => 1100,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 08:20:57',
            ),
            11 => 
            array (
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 08:46:23',
                'formula' => '9-10-11',
                'id' => 12,
                'name' => 'Laba bersih setelah pajak',
                'order' => 1200,
                'report_type_id' => 1,
                'updated_at' => '2021-04-10 08:46:23',
            ),
            12 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 09:54:50',
                'formula' => '48+49+50',
                'id' => 13,
                'name' => 'Total Cash & Bank',
                'order' => 100,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 09:54:50',
            ),
            13 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:23:45',
                'formula' => '51+52+53+54+55+56+57',
                'id' => 14,
                'name' => 'Total Piutang',
                'order' => 200,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:23:45',
            ),
            14 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:27:41',
                'formula' => '58',
                'id' => 15,
                'name' => 'Persediaan',
                'order' => 300,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:28:24',
            ),
            15 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:29:10',
                'formula' => '59+60+61+62',
                'id' => 16,
                'name' => 'Total Uang Muka & Beban Dibayar Dimuka',
                'order' => 400,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:29:10',
            ),
            16 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:32:51',
                'formula' => '63+64+65+66+67',
                'id' => 17,
                'name' => 'Total Pajak Dibayar Dimuka',
                'order' => 500,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:32:51',
            ),
            17 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:35:08',
                'formula' => '68+69+70+71+72+73+74+75+76+77+78+79+80+81+82+83',
                'id' => 18,
                'name' => 'Total Investasi & Aktiva Tetap',
                'order' => 600,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 16:23:20',
            ),
            18 => 
            array (
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 10:38:46',
                'formula' => '13+14+15+16+17+18',
                'id' => 19,
                'name' => 'Total Assets',
                'order' => 700,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:38:46',
            ),
            19 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:42:34',
                'formula' => '84+85+86+87+88+89',
                'id' => 20,
                'name' => 'Total Hutang Jangka Pendek',
                'order' => 800,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:42:34',
            ),
            20 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:44:16',
                'formula' => '90+91+92+93+94',
                'id' => 21,
                'name' => 'Total Hutang Pajak',
                'order' => 900,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:44:16',
            ),
            21 => 
            array (
                'additional_formula' => 'g-l-sub-categories',
                'created_at' => '2021-04-10 10:46:16',
                'formula' => '95+96+97',
                'id' => 22,
                'name' => 'Total Capital',
                'order' => 1000,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 10:46:16',
            ),
            22 => 
            array (
                'additional_formula' => 'g-l-categories',
                'created_at' => '2021-04-10 11:12:15',
                'formula' => '20+21+22',
                'id' => 23,
                'name' => 'Total Capital & Liabilities',
                'order' => 1100,
                'report_type_id' => 2,
                'updated_at' => '2021-04-10 11:12:15',
            ),
        ));
        
        
    }
}