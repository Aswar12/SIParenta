<?php

namespace Database\Seeders;

use App\Models\kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kegiatan = [
            [
                'nama_kegiatan' => 'input maps',
                'satuan_kegiatan' => 'document',
                'vol_kegiatan' => '10',
                'id_butir' => '1',
                
            ],
            [  
                    'nama_kegiatan' => 'input maps',
                    'satuan_kegiatan' => 'document',
                    'vol_kegiatan' => '10',
                    'id_butir' => '1',
            ],
            [
                'nama_kegiatan' => 'input maps',
                'satuan_kegiatan' => 'document',
                'vol_kegiatan' => '10',
                'id_butir' => '1',
            ],
        ];

        foreach ($kegiatan as $key => $value) {
            kegiatan::create($value);
        }
    }
}
