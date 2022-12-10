<?php

namespace Database\Seeders;

use App\Models\masyarakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Galih',],
            ['name' => 'Asep',],
            ['name' => 'Joko',],
            ['name' => 'Dono',],

        ];

        foreach ($data as $value) {
            masyarakat::insert([
                'name' => $value['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
