<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';

    protected $fillable = [
       'id_butir', 'nama_kegiatan', 'satuan_kegiatan', 'vol_kegiatan'
    ];

    public function butir()
    {
        return $this->belongsTo(Butir::class, 'id_butir', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_kegiatan', 'id');
    }

}
