<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class butir extends Model
{
    use HasFactory;

    protected $table = 'butir';

    protected $fillable = [
        'nama_butir',
        'satuan_butir',
        'angka_kredit',
        'id_fungsional',
    
    ];

    public function kegiatan()
    {   
        return $this->hasMany(kegiatan::class, 'id_kegiatan', 'id');
    }

    public function fungsional(){
        return $this->belongsTo(fungsional::class, 'id_fungsional', 'id');
    }
}
