<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'iphone 16', 'jumlah' => 19, 'tanggal_produksi' => '2024-5-21', 'id_merek' => 1],
            ['nama_produk' => 'mac', 'jumlah' => 31, 'tanggal_produksi' => '2024-5-21', 'id_merek' => 1],
            ['nama_produk' => 'xiomi tv', 'jumlah' => 15, 'tanggal_produksi' => '2024-7-26', 'id_merek' => 3],
            ['nama_produk' => 'xiomi phone', 'jumlah' => 70, 'tanggal_produksi' => '2024-7-26', 'id_merek' => 3],
            ['nama_produk' => 'rog phone', 'jumlah' => 50, 'tanggal_produksi' => '2024-8-01', 'id_merek' => 2],
            ['nama_produk' => 'asus rog laptop', 'jumlah' => 35, 'tanggal_produksi' => '2024-8-01', 'id_merek' => 2],
        ];

        DB::table('produks')->insert($produks);

    }
}
