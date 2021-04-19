<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GLSubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('g_l__sub_categories')->delete();
        
        \DB::table('g_l__sub_categories')->insert(array (
            0 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 1,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 1,
                'name' => 'Penjualan Net',
                'order' => 100,
                'updated_at' => '2021-04-08 12:09:01',
            ),
            1 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 1,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 2,
                'name' => 'Biaya Pribadi',
                'order' => 200,
                'updated_at' => '2021-04-08 12:09:16',
            ),
            2 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 1,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 3,
                'name' => 'Biaya Moulding',
                'order' => 300,
                'updated_at' => '2021-04-08 12:09:23',
            ),
            3 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 1,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 4,
                'name' => 'Harga Pokok Penjualan',
                'order' => 400,
                'updated_at' => '2021-04-08 12:09:31',
            ),
            4 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 5,
                'name' => 'Biaya Pemasaran & Promosi',
                'order' => 500,
                'updated_at' => '2021-04-09 07:46:35',
            ),
            5 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 6,
                'name' => 'Insentif Pihak Ketiga',
                'order' => 600,
                'updated_at' => '2021-04-09 07:46:44',
            ),
            6 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 7,
                'name' => 'Biaya Gaji SPG',
                'order' => 700,
                'updated_at' => '2021-04-09 07:46:51',
            ),
            7 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 8,
                'name' => 'Tour Customer',
                'order' => 800,
                'updated_at' => '2021-04-09 07:47:01',
            ),
            8 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 9,
                'name' => 'Biaya Pengiriman',
                'order' => 900,
                'updated_at' => '2021-04-09 07:47:10',
            ),
            9 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 10,
                'name' => 'Komisi Sales & Marketing',
                'order' => 1000,
                'updated_at' => '2021-04-09 07:47:17',
            ),
            10 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 11,
                'name' => 'Biaya Konsumsi',
                'order' => 1100,
                'updated_at' => '2021-04-09 07:47:25',
            ),
            11 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 12,
                'name' => 'Biaya Iuran Bulanan',
                'order' => 1200,
                'updated_at' => '2021-04-09 07:47:37',
            ),
            12 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 2,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 13,
                'name' => 'Biaya Penjualan Lain-Lain',
                'order' => 1300,
                'updated_at' => '2021-04-09 07:47:44',
            ),
            13 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 14,
                'name' => 'Biaya Gaji Sales & Marketing',
                'order' => 1400,
                'updated_at' => '2021-04-09 12:29:43',
            ),
            14 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 15,
                'name' => 'Biaya Transportasi Sales & Marketing',
                'order' => 1500,
                'updated_at' => '2021-04-09 12:29:53',
            ),
            15 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 16,
                'name' => 'Biaya Lembur Sales & Marketing',
                'order' => 1600,
                'updated_at' => '2021-04-09 12:30:57',
            ),
            16 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 17,
                'name' => 'THR & Bonus Sales & Marketing',
                'order' => 1700,
                'updated_at' => '2021-04-09 12:30:53',
            ),
            17 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 18,
                'name' => 'Biaya Gaji Administrasi',
                'order' => 1800,
                'updated_at' => '2021-04-09 12:30:50',
            ),
            18 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 19,
                'name' => 'Biaya Lembur Administrasi',
                'order' => 1900,
                'updated_at' => '2021-04-09 12:30:46',
            ),
            19 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 20,
                'name' => 'THR & Bonus Administrasi',
                'order' => 2000,
                'updated_at' => '2021-04-09 12:30:43',
            ),
            20 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 21,
                'name' => 'Komisi',
                'order' => 2100,
                'updated_at' => '2021-04-09 12:30:39',
            ),
            21 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 22,
                'name' => 'Biaya Transportasi Administrasi',
                'order' => 2200,
                'updated_at' => '2021-04-09 12:30:36',
            ),
            22 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 3,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 23,
                'name' => 'Biaya Pesangon',
                'order' => 2300,
                'updated_at' => '2021-04-09 12:30:11',
            ),
            23 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 24,
                'name' => 'Biaya Utility',
                'order' => 2400,
                'updated_at' => '2021-04-10 06:04:31',
            ),
            24 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 25,
                'name' => 'Biaya Komunikasi',
                'order' => 2500,
                'updated_at' => '2021-04-10 06:04:35',
            ),
            25 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 26,
                'name' => 'Biaya Perlengkapan Kantor',
                'order' => 2600,
                'updated_at' => '2021-04-10 06:04:39',
            ),
            26 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 27,
                'name' => 'Biaya Pemeliharaan Kantor',
                'order' => 2700,
                'updated_at' => '2021-04-10 06:04:42',
            ),
            27 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 28,
                'name' => 'Biaya Sewa',
                'order' => 2800,
                'updated_at' => '2021-04-10 06:04:46',
            ),
            28 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 29,
                'name' => 'Biaya Asuransi',
                'order' => 2900,
                'updated_at' => '2021-04-10 06:04:50',
            ),
            29 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 30,
                'name' => 'Biaya Penyusutan',
                'order' => 3000,
                'updated_at' => '2021-04-10 06:04:53',
            ),
            30 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 4,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 31,
                'name' => 'Biaya lain lain',
                'order' => 3100,
                'updated_at' => '2021-04-10 06:04:57',
            ),
            31 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 5,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 32,
                'name' => 'Biaya Kendaraan',
                'order' => 3200,
                'updated_at' => '2021-04-10 06:06:17',
            ),
            32 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 5,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 33,
                'name' => 'Biaya Perjalanan dinas DN',
                'order' => 3300,
                'updated_at' => '2021-04-10 06:06:22',
            ),
            33 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 5,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 34,
                'name' => 'Biaya Perjalanan dinas LN',
                'order' => 3400,
                'updated_at' => '2021-04-10 06:06:26',
            ),
            34 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 6,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 35,
                'name' => 'Biaya Entertaintment',
                'order' => 3500,
                'updated_at' => '2021-04-10 06:09:33',
            ),
            35 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 6,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 36,
                'name' => 'Biaya Tenaga Ahli',
                'order' => 3600,
                'updated_at' => '2021-04-10 06:09:38',
            ),
            36 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 6,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 37,
                'name' => 'Biaya Iuran dan Sumbangan',
                'order' => 3700,
                'updated_at' => '2021-04-10 06:09:42',
            ),
            37 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 6,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 38,
                'name' => 'Biaya Piutang Tak Tertagih',
                'order' => 3800,
                'updated_at' => '2021-04-10 06:09:46',
            ),
            38 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 6,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 39,
                'name' => 'Biaya Izin',
                'order' => 3900,
                'updated_at' => '2021-04-10 06:09:50',
            ),
            39 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 6,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 40,
                'name' => 'Biaya Umum Lain-Lain',
                'order' => 4000,
                'updated_at' => '2021-04-10 06:09:54',
            ),
            40 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 7,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 41,
                'name' => 'Pendapatan Bunga',
                'order' => 4100,
                'updated_at' => '2021-04-10 06:11:16',
            ),
            41 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 7,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 42,
                'name' => 'Pendapatan Lain-Lain',
                'order' => 4200,
                'updated_at' => '2021-04-10 06:11:20',
            ),
            42 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 7,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 43,
                'name' => 'Selisih Kurs',
                'order' => 4300,
                'updated_at' => '2021-04-10 06:11:24',
            ),
            43 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 7,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 44,
                'name' => 'Biaya Bank',
                'order' => 4400,
                'updated_at' => '2021-04-10 06:11:28',
            ),
            44 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 7,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 45,
                'name' => 'Biaya Lain-Lain',
                'order' => 4500,
                'updated_at' => '2021-04-10 06:11:32',
            ),
            45 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 10,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 46,
                'name' => 'Biaya Pajak',
                'order' => 4600,
                'updated_at' => '2021-04-10 07:40:26',
            ),
            46 => 
            array (
                'additional_formula' => NULL,
                'category_id' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 47,
                'name' => 'Estimasi Pajak',
                'order' => 4700,
                'updated_at' => '2021-04-07 14:09:17',
            ),
            47 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 13,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 48,
                'name' => 'Kas',
                'order' => 4800,
                'updated_at' => '2021-04-10 09:55:31',
            ),
            48 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 13,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 49,
                'name' => 'Bank',
                'order' => 4900,
                'updated_at' => '2021-04-10 09:55:35',
            ),
            49 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 13,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 50,
                'name' => 'Deposito',
                'order' => 5000,
                'updated_at' => '2021-04-10 09:55:39',
            ),
            50 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 51,
                'name' => 'Piutang Usaha',
                'order' => 5100,
                'updated_at' => '2021-04-10 10:24:30',
            ),
            51 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 52,
                'name' => 'Piutang Luar Negeri',
                'order' => 5200,
                'updated_at' => '2021-04-10 10:24:54',
            ),
            52 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 53,
                'name' => 'Piutang Bea Cukai',
                'order' => 5300,
                'updated_at' => '2021-04-10 10:24:59',
            ),
            53 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 54,
                'name' => 'Piutang Bank Garansi',
                'order' => 5400,
                'updated_at' => '2021-04-10 10:25:03',
            ),
            54 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 55,
                'name' => 'Piutang Karyawan',
                'order' => 5500,
                'updated_at' => '2021-04-10 10:25:07',
            ),
            55 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 56,
                'name' => 'Piutang Lain Lain',
                'order' => 5600,
                'updated_at' => '2021-04-10 10:25:11',
            ),
            56 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 14,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 57,
                'name' => 'Piutang Afiliasi',
                'order' => 5700,
                'updated_at' => '2021-04-10 10:25:15',
            ),
            57 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 15,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 58,
                'name' => 'Persediaan',
                'order' => 5800,
                'updated_at' => '2021-04-10 10:28:35',
            ),
            58 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 16,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 59,
                'name' => 'Uang Muka Import',
                'order' => 5900,
                'updated_at' => '2021-04-10 10:29:38',
            ),
            59 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 16,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 60,
                'name' => 'Uang Muka Tol',
                'order' => 6000,
                'updated_at' => '2021-04-10 10:29:42',
            ),
            60 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 16,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 61,
                'name' => 'Beban Dibayar Dimuka',
                'order' => 6100,
                'updated_at' => '2021-04-10 10:29:46',
            ),
            61 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 16,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 62,
                'name' => 'Uang Muka Lain-Lain',
                'order' => 6200,
                'updated_at' => '2021-04-10 10:29:49',
            ),
            62 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 17,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 63,
                'name' => 'PPN Masukan',
                'order' => 6300,
                'updated_at' => '2021-04-10 10:33:38',
            ),
            63 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 17,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 64,
                'name' => 'PPh 21',
                'order' => 6400,
                'updated_at' => '2021-04-10 10:33:35',
            ),
            64 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 17,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 65,
                'name' => 'PPh 22',
                'order' => 6500,
                'updated_at' => '2021-04-10 10:33:31',
            ),
            65 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 17,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 66,
                'name' => 'PPh 23',
                'order' => 6600,
                'updated_at' => '2021-04-10 10:33:27',
            ),
            66 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 17,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 67,
                'name' => 'PPh 25',
                'order' => 6700,
                'updated_at' => '2021-04-10 10:33:23',
            ),
            67 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 68,
                'name' => 'Tanah',
                'order' => 6800,
                'updated_at' => '2021-04-10 10:35:29',
            ),
            68 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 69,
                'name' => 'Bangunan',
                'order' => 6900,
                'updated_at' => '2021-04-10 10:35:34',
            ),
            69 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 70,
                'name' => 'Akumulasi Penyusutan Bangunan',
                'order' => 7000,
                'updated_at' => '2021-04-10 10:35:38',
            ),
            70 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 71,
                'name' => 'Peralatan Kantor',
                'order' => 7100,
                'updated_at' => '2021-04-10 10:35:41',
            ),
            71 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 72,
                'name' => 'Akumulasi Penyusutan Peralatan Kantor',
                'order' => 7200,
                'updated_at' => '2021-04-10 10:35:45',
            ),
            72 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 73,
                'name' => 'Instalasi Listrik',
                'order' => 7300,
                'updated_at' => '2021-04-10 10:36:02',
            ),
            73 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 74,
                'name' => 'Akumulasi Penyusutan Instalasi Listrik',
                'order' => 7400,
                'updated_at' => '2021-04-10 10:36:06',
            ),
            74 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 75,
                'name' => 'Kendaraan',
                'order' => 7500,
                'updated_at' => '2021-04-10 10:36:10',
            ),
            75 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 76,
                'name' => 'Akumulasi Penyusutan Kendaraan',
                'order' => 7600,
                'updated_at' => '2021-04-10 10:37:23',
            ),
            76 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 77,
                'name' => 'Perabot Kantor & Gudang',
                'order' => 7700,
                'updated_at' => '2021-04-10 10:37:17',
            ),
            77 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 78,
                'name' => 'Akumulasi Penyusutan Perabot Kantor & Gudang',
                'order' => 7800,
                'updated_at' => '2021-04-10 10:37:10',
            ),
            78 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 79,
                'name' => 'Software',
                'order' => 7900,
                'updated_at' => '2021-04-10 10:37:03',
            ),
            79 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 80,
                'name' => 'Akumulasi Penyusutan Software',
                'order' => 8000,
                'updated_at' => '2021-04-10 10:36:56',
            ),
            80 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 81,
                'name' => 'Aktiva Lain-Lain',
                'order' => 8100,
                'updated_at' => '2021-04-10 10:36:50',
            ),
            81 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 82,
                'name' => 'Akumulasi Penyusutan Aktiva Lain-Lain',
                'order' => 8200,
                'updated_at' => '2021-04-10 10:36:44',
            ),
            82 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 18,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 83,
                'name' => 'Investasi',
                'order' => 8300,
                'updated_at' => '2021-04-10 10:36:37',
            ),
            83 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 20,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 84,
                'name' => 'Hutang Bank',
                'order' => 8400,
                'updated_at' => '2021-04-10 10:42:49',
            ),
            84 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 20,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 85,
                'name' => 'Hutang Leasing',
                'order' => 8500,
                'updated_at' => '2021-04-10 10:42:56',
            ),
            85 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 20,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 86,
                'name' => 'Hutang Usaha',
                'order' => 8600,
                'updated_at' => '2021-04-10 10:43:00',
            ),
            86 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 20,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 87,
                'name' => 'Hutang Afiliasi',
                'order' => 8700,
                'updated_at' => '2021-04-10 10:43:03',
            ),
            87 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 20,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 88,
                'name' => 'Biaya yang masih harus dibayar',
                'order' => 8800,
                'updated_at' => '2021-04-10 10:43:07',
            ),
            88 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 20,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 89,
                'name' => 'Hutang Lain-Lain',
                'order' => 8900,
                'updated_at' => '2021-04-10 10:43:12',
            ),
            89 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 21,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 90,
                'name' => 'PPN',
                'order' => 9000,
                'updated_at' => '2021-04-10 10:44:44',
            ),
            90 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 21,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 91,
                'name' => 'PPh 21',
                'order' => 9100,
                'updated_at' => '2021-04-14 03:18:38',
            ),
            91 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 21,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 92,
                'name' => 'PPh 23',
                'order' => 9200,
                'updated_at' => '2021-04-14 03:18:59',
            ),
            92 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 21,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 93,
                'name' => 'PPh 4 ayat 2',
                'order' => 9300,
                'updated_at' => '2021-04-10 10:45:05',
            ),
            93 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 21,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 94,
                'name' => 'PPh 29',
                'order' => 9400,
                'updated_at' => '2021-04-10 10:45:12',
            ),
            94 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 22,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 95,
                'name' => 'Modal Saham',
                'order' => 9500,
                'updated_at' => '2021-04-10 10:46:38',
            ),
            95 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 22,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 96,
                'name' => 'Deviden',
                'order' => 9600,
                'updated_at' => '2021-04-10 10:46:42',
            ),
            96 => 
            array (
                'additional_formula' => NULL,
                'category_id' => 22,
                'created_at' => '2021-04-07 14:09:17',
                'formula' => '+',
                'id' => 97,
                'name' => 'Saldo Laba',
                'order' => 9700,
                'updated_at' => '2021-04-10 10:46:49',
            ),
        ));
        
        
    }
}