<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\butir;

class ButirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $butir = [
            [
                'nama_butir' => 'input maps',
                'satuan_butir' => 'document',
                'angka_kredit' => '10',
                'id_fungsional' => '1',
                
            ],
            [  
                'nama_butir' => 'input maps',
                'satuan_butir' => 'document',
                'angka_kredit' => '10',
                'id_fungsional' => '2',
            ],
            [
                'nama_butir' => 'input maps',
                'satuan_butir' => 'document',
                'angka_kredit' => '10',
                'id_fungsional' => '3',
            ],
        ];

        foreach ($butir as $key => $value) {
           Butir::create($value);
        }
    }
}
