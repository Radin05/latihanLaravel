<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pendek' => 'kakang', 'jenis_kelamin' => 'laki-laki'],
            ['nama_pendek' => 'ujang', 'jenis_kelamin' => 'laki-laki'],
            ['nama_pendek' => 'ongkang', 'jenis_kelamin' => 'perempuan'],
        ];

        // masukan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}
