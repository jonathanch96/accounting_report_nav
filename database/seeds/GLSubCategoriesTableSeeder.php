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
                'id' => 1,
                'name' => 'Penjualan Net',
                'order' => 100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-08 12:09:01',
                'category_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Biaya Pribadi',
                'order' => 200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-08 12:09:16',
                'category_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Biaya Moulding',
                'order' => 300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-08 12:09:23',
                'category_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Harga Pokok Penjualan',
                'order' => 400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-08 12:09:31',
                'category_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Biaya Pemasaran & Promosi',
                'order' => 500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:46:35',
                'category_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Insentif Pihak Ketiga',
                'order' => 600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:46:44',
                'category_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Biaya Gaji SPG',
                'order' => 700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:46:51',
                'category_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Tour Customer',
                'order' => 800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:47:01',
                'category_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Biaya Pengiriman',
                'order' => 900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:47:10',
                'category_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Komisi Sales & Marketing',
                'order' => 1000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:47:17',
                'category_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Biaya Konsumsi',
                'order' => 1100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:47:25',
                'category_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Biaya Iuran Bulanan',
                'order' => 1200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:47:37',
                'category_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Biaya Penjualan Lain-Lain',
                'order' => 1300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 07:47:44',
                'category_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Biaya Gaji Sales & Marketing',
                'order' => 1400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:29:43',
                'category_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Biaya Transportasi Sales & Marketing',
                'order' => 1500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:29:53',
                'category_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Biaya Lembur Sales & Marketing',
                'order' => 1600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:57',
                'category_id' => 3,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'THR & Bonus Sales & Marketing',
                'order' => 1700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:53',
                'category_id' => 3,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Biaya Gaji Administrasi',
                'order' => 1800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:50',
                'category_id' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Biaya Lembur Administrasi',
                'order' => 1900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:46',
                'category_id' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'THR & Bonus Administrasi',
                'order' => 2000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:43',
                'category_id' => 3,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Komisi',
                'order' => 2100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:39',
                'category_id' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Biaya Transportasi Administrasi',
                'order' => 2200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:36',
                'category_id' => 3,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Biaya Pesangon',
                'order' => 2300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-09 12:30:11',
                'category_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Biaya Utility',
                'order' => 2400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:31',
                'category_id' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Biaya Komunikasi',
                'order' => 2500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:35',
                'category_id' => 4,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Biaya Perlengkapan Kantor',
                'order' => 2600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:39',
                'category_id' => 4,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Biaya Pemeliharaan Kantor',
                'order' => 2700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:42',
                'category_id' => 4,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Biaya Sewa',
                'order' => 2800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:46',
                'category_id' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Biaya Asuransi',
                'order' => 2900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:50',
                'category_id' => 4,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Biaya Penyusutan',
                'order' => 3000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:53',
                'category_id' => 4,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Biaya lain lain',
                'order' => 3100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:04:57',
                'category_id' => 4,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Biaya Kendaraan',
                'order' => 3200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:06:17',
                'category_id' => 5,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Biaya Perjalanan dinas DN',
                'order' => 3300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:06:22',
                'category_id' => 5,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Biaya Perjalanan dinas LN',
                'order' => 3400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:06:26',
                'category_id' => 5,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Biaya Entertaintment',
                'order' => 3500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:09:33',
                'category_id' => 6,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Biaya Tenaga Ahli',
                'order' => 3600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:09:38',
                'category_id' => 6,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Biaya Iuran dan Sumbangan',
                'order' => 3700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:09:42',
                'category_id' => 6,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Biaya Piutang Tak Tertagih',
                'order' => 3800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:09:46',
                'category_id' => 6,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Biaya Izin',
                'order' => 3900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:09:50',
                'category_id' => 6,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Biaya Umum Lain-Lain',
                'order' => 4000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:09:54',
                'category_id' => 6,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Pendapatan Bunga',
                'order' => 4100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:11:16',
                'category_id' => 7,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Pendapatan Lain-Lain',
                'order' => 4200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:11:20',
                'category_id' => 7,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Selisih Kurs',
                'order' => 4300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:11:24',
                'category_id' => 7,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Biaya Bank',
                'order' => 4400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:11:28',
                'category_id' => 7,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Biaya Lain-Lain',
                'order' => 4500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 06:11:32',
                'category_id' => 7,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Biaya Pajak',
                'order' => 4600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 07:40:26',
                'category_id' => 10,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Estimasi Pajak',
                'order' => 4700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-07 14:09:17',
                'category_id' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Kas',
                'order' => 4800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 09:55:31',
                'category_id' => 13,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Bank',
                'order' => 4900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 09:55:35',
                'category_id' => 13,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Deposito',
                'order' => 5000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 09:55:39',
                'category_id' => 13,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Piutang Usaha',
                'order' => 5100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:24:30',
                'category_id' => 14,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Piutang Luar Negeri',
                'order' => 5200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:24:54',
                'category_id' => 14,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Piutang Bea Cukai',
                'order' => 5300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:24:59',
                'category_id' => 14,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Piutang Bank Garansi',
                'order' => 5400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:25:03',
                'category_id' => 14,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Piutang Karyawan',
                'order' => 5500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:25:07',
                'category_id' => 14,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Piutang Lain Lain',
                'order' => 5600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:25:11',
                'category_id' => 14,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Piutang Afiliasi',
                'order' => 5700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:25:15',
                'category_id' => 14,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Persediaan',
                'order' => 5800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:28:35',
                'category_id' => 15,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Uang Muka Import',
                'order' => 5900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:29:38',
                'category_id' => 16,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Uang Muka Tol',
                'order' => 6000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:29:42',
                'category_id' => 16,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Beban Dibayar Dimuka',
                'order' => 6100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:29:46',
                'category_id' => 16,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Uang Muka Lain-Lain',
                'order' => 6200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:29:49',
                'category_id' => 16,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'PPN Masukan',
                'order' => 6300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:33:38',
                'category_id' => 17,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'PPh 21',
                'order' => 6400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:33:35',
                'category_id' => 17,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'PPh 22',
                'order' => 6500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:33:31',
                'category_id' => 17,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'PPh 23',
                'order' => 6600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:33:27',
                'category_id' => 17,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'PPh 25',
                'order' => 6700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:33:23',
                'category_id' => 17,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Tanah',
                'order' => 6800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:35:29',
                'category_id' => 18,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Bangunan',
                'order' => 6900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:35:34',
                'category_id' => 18,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Akumulasi Penyusutan Bangunan',
                'order' => 7000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:35:38',
                'category_id' => 18,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Peralatan Kantor',
                'order' => 7100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:35:41',
                'category_id' => 18,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Akumulasi Penyusutan Peralatan Kantor',
                'order' => 7200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:35:45',
                'category_id' => 18,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Instalasi Listrik',
                'order' => 7300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:02',
                'category_id' => 18,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Akumulasi Penyusutan Instalasi Listrik',
                'order' => 7400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:06',
                'category_id' => 18,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Kendaraan',
                'order' => 7500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:10',
                'category_id' => 18,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Akumulasi Penyusutan Kendaraan',
                'order' => 7600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:37:23',
                'category_id' => 18,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Perabot Kantor & Gudang',
                'order' => 7700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:37:17',
                'category_id' => 18,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Akumulasi Penyusutan Perabot Kantor & Gudang',
                'order' => 7800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:37:10',
                'category_id' => 18,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Software',
                'order' => 7900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:37:03',
                'category_id' => 18,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Akumulasi Penyusutan Software',
                'order' => 8000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:56',
                'category_id' => 18,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Aktiva Lain-Lain',
                'order' => 8100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:50',
                'category_id' => 18,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Akumulasi Penyusutan Aktiva Lain-Lain',
                'order' => 8200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:44',
                'category_id' => 18,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Investasi',
                'order' => 8300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:36:37',
                'category_id' => 18,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Hutang Bank',
                'order' => 8400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:42:49',
                'category_id' => 20,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Hutang Leasing',
                'order' => 8500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:42:56',
                'category_id' => 20,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Hutang Usaha',
                'order' => 8600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:43:00',
                'category_id' => 20,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Hutang Afiliasi',
                'order' => 8700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:43:03',
                'category_id' => 20,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Biaya yang masih harus dibayar',
                'order' => 8800,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:43:07',
                'category_id' => 20,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Hutang Lain-Lain',
                'order' => 8900,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:43:12',
                'category_id' => 20,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'PPN',
                'order' => 9000,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:44:44',
                'category_id' => 21,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'PPh 23',
                'order' => 9100,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:44:50',
                'category_id' => 21,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'PPh 4 ayat 2',
                'order' => 9200,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:44:56',
                'category_id' => 21,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'PPh 4 ayat 2',
                'order' => 9300,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:45:05',
                'category_id' => 21,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'PPh 29',
                'order' => 9400,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:45:12',
                'category_id' => 21,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Modal Saham',
                'order' => 9500,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:46:38',
                'category_id' => 22,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Deviden',
                'order' => 9600,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:46:42',
                'category_id' => 22,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Saldo Laba',
                'order' => 9700,
                'formula' => '+',
                'additional_formula' => NULL,
                'created_at' => '2021-04-07 14:09:17',
                'updated_at' => '2021-04-10 10:46:49',
                'category_id' => 22,
            ),
        ));
        
        
    }
}