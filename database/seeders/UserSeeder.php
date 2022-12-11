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
        // $dataUser = [
        //     ['username' => 'LPMK-LOWOKWARU'],
        //     ['password' => 'password'],
        //     ['role_id' => 1],
        //     ['kelurahan_id' => 1],
            

        // ];

        // foreach ($dataUser as $data) {
        //     DB::table('users')->insert([
        //         'username' => $data['username'],
        //         'password' => $data['password'],
        //         'role_id' => $data['role_id'],
        //         'kelurahan_id' => $data['kelurahan_id'],
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
