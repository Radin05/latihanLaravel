<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'Titi', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'titi@gmail.com'],
            ['nama'=>'tri', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'tri@gmail.com'],
            ['nama'=>'toto', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'toto@gmail.com'],
            ['nama'=>'teguh', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'teguh@gmail.com'],
            ['nama'=>'tono', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'tono@gmail.com'],
            ['nama'=>'tamara', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'tamara@gmail.com'],
            ['nama'=>'taya', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'taya@gmail.com'],
            ['nama'=>'tuti', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'tuti@gmail.com'],
            ['nama'=>'tomo', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'tomo@gmail.com'],
            ['nama'=>'tantri', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bandung', 'agama'=>'islam', 'telepon'=>821234129, 'email'=>'tantri@gmail.com']
        ];

        // masukan data ke database
        DB::table('siswas')->insert($siswas);

    }
}
