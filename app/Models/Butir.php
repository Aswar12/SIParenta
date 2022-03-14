<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class butir extends Model
{
    use HasFactory;

    public function kegiatan()
    {
        return $this->hasMany(kegiatan::class, 'id_kegiatan', 'id');
    }
}
