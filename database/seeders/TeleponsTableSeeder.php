<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $telepons = [
            ['no_telp' => '082313249332', 'pengguna_id' => 1],
            ['no_telp' => '080914390231', 'pengguna_id' => 3],
            ['no_telp' => '082115452003', 'pengguna_id' => 2]
        ];
        DB::table('telepons')->insert($telepons);


    }
}
