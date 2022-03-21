<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';

    protected $fillable = [
        ''
    ];

    public function butir()
    {
        return $this->belongsTo(butir::class, 'id_butir', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_kegiatan', 'id');
    }

}
