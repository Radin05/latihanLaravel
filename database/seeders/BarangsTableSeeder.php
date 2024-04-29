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
            ['nama' => 'kursi', 'jumlah' => 100],
            ['nama' => 'kemeja', 'jumlah' => 111],
            ['nama' => 'meja', 'jumlah' => 200],
        ];

        // masukan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
