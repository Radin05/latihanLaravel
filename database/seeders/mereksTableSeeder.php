<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek' => 'iphone'],
            ['nama_merek' => 'asus'],
            ['nama_merek' => 'xiomi'],
        ];

    DB::table('mereks')->insert($mereks);

    }
}
