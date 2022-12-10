<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataAspirasi = [
            ['nama' => 'Sampah', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['nama' => 'Sampah2', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['nama' => 'Sampah3', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['nama' => 'Sampah4', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],
            ['nama' => 'Sampah5', 'penyebab' => 'Banyak', 'lokasi' => 'TestLokasi', 'usulan' => 'test Usulan', 'keterangan' => 'testKeterangan', 'users_id' => 1, 'keluarahan_id' => 1],

        ];

        foreach ($dataAspirasi as $data) {
            DB::table('form_aspirasis')->insert([
                'nama' => $data['nama'],
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
