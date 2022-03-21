<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Aswar Sumarlin',
                'username' => 'aswar_sumarlin',
                'email' => 'aswar@gmail.com',
                'nip_lama' => '7887712',
                'nip_baru' => '123456789',
                'peran' => 'Admin',
                'id_fungsional' => '1',
                'password' => bcrypt('aswar123'),
            ],
            [
                'name' => 'Rizki',
                'username' => 'rizki',
                'email' => 'aswar@bps.go.id',
                'nip_lama' => '1123225',
                'nip_baru' => '1234235',
                'peran' => 'Operator',
                'id_fungsional' => '2',
                'password' => bcrypt('aswar123'),
            ],
            [
                'name' => 'ardi',
                'username' => 'ardi',
                'email' => 'ardi@bps.go.id',
                'nip_lama' => '11235',
                'nip_baru' => '123235',
                'peran' => 'Pegawai',
                'id_fungsional' => '3',
                'password' => bcrypt('aswar123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
