<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormAspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataAspirasi = [
            ['permasalahan' => 'Sampah6', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['permasalahan' => 'Sampah7', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['permasalahan' => 'Sampah8', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['permasalahan' => 'Sampah9', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['permasalahan' => 'Sampah10', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],

        ];

        foreach ($dataAspirasi as $data) {
            DB::table('form_aspirasis')->insert([
                'permasalahan' => $data['permasalahan'],
                'penyebab' => $data['penyebab'],
                'lokasi' => $data['lokasi'],
                'usulan' => $data['usulan'],
                'keterangan' => $data['keterangan'],
                'users_id' => $data['users_id'],
                'kelurahan_id' => $data['keluarahan_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
