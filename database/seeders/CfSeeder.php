<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_nilai' => 'Tidak Yakin', 'cf' => 0.1],
            ['nama_nilai' => 'Hampir Tidak Yakin', 'cf' => 0.2],
            ['nama_nilai' => 'Kemungkinan Tidak Yakin', 'cf' => 0.3],
            ['nama_nilai' => 'Mungkin Tidak Yakin', 'cf' => 0.4],
            ['nama_nilai' => 'Tidak Tahu', 'cf' => 0.5],
            ['nama_nilai' => 'Mungkin', 'cf' => 0.6],
            ['nama_nilai' => 'Kemungkinan Besar', 'cf' => 0.7],
            ['nama_nilai' => 'Hampir Yakin', 'cf' => 0.8],
            ['nama_nilai' => 'Yakin', 'cf' => 0.9],
            ['nama_nilai' => 'Sangat Yakin', 'cf' => 1],
        ];

        // Masukkan data ke dalam tabel cf_user
        DB::table('cf_user')->insert($data);
    }
}
