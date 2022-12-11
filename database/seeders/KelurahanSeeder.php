<?php

namespace Database\Seeders;

use App\Models\kelurahan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKelurahan = [
            ['name' => 'Lowokwaru'],

        ];

        foreach ($dataKelurahan as $data) {
            DB::table('kelurahans')->insert([
                'name' => $data['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
