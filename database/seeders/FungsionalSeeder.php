<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FungsionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fungsional = [
            [
                'Tingkat' => 'Statistisi',
                'jenis' => 'document',
                'grade' => 'tinggi',
                'nama' => 'saddg',
                
            ],
            [  
                'Tingkat' => 'input maps',
                'jenis' => 'document',
                'grade' => '10',
                'nama' => '1',
            ],
            [
                'Tingkat' => 'input maps',
                'jenis' => 'document',
                'grade' => '10',
                'nama' => '1',
            ],
        ];
    }
}
