<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'ciki', 'harga' => 1000, 'stok' => 50],
            ['nama' => 'permen', 'harga' => 500, 'stok' => 50],
            ['nama' => 'coklat', 'harga' => 7000, 'stok' => 50],
        ];

        // masukan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
