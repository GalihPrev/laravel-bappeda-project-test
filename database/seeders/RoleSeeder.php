<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataRole= [
            ['name' => 'Masyarakat'],

        ];

        foreach ($dataRole as $data) {
            DB::table('roles')->insert([
                'name' => $data['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
