<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
                ['id_barang' => 2, 'id_pembeli' => 3, 'jumlah' => 1, 'tanggal' => '2024-5-21'],
                ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 3, 'tanggal' => '2024-5-21'],
                ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 3, 'tanggal' => '2024-7-26'],
                ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 5, 'tanggal' => '2024-7-26'],
                ['id_barang' => 3, 'id_pembeli' => 2, 'jumlah' => 3, 'tanggal' => '2024-8-01'],
                ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 5, 'tanggal' => '2024-8-01'],
            ];

            DB::table('transaksis')->insert($transaksis);

    }
}
