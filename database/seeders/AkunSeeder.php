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
                'email' => 'aswar@gmail.com',
                'nip_lama' => '16.01.53.0012',
                'nip_baru' => '123456789',
                'peran' => 'Admin',
                'password' => bcrypt('aswar123'),
            ],
            [
                'name' => 'Rizki',
                'email' => 'aswar@bps.go.id',
                'nip_lama' => '1123234',
                'nip_baru' => '12345141',
                'peran' => 'Operator',
                'password' => bcrypt('aswar123'),
            ],
            [
                'name' => 'ardi',
                'email' => 'ardi@bps.go.id',
                'nip_lama' => '1123234',
                'nip_baru' => '12345141',
                'peran' => 'Pegawai',
                'password' => bcrypt('aswar123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
