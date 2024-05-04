<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama' => 'uhuy'],
            ['nama' => 'ahay'],
            ['nama' => 'ihiy'],
        ];
        
    DB::table('penggunas')->insert($penggunas);

    }
}
