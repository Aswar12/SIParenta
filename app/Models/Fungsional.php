<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fungsional extends Model
{
    use HasFactory;
    protected $table = 'fungsional';
    protected $fillable = [
        'tingkat',
        'jenis',
        'grade',
        'nama_fungsional',
    ];

    public function butir(){
        return $this->hasMany(Butir::class, 'id_fungsional', 'id');
    }
    public function user(){
        return $this->hasMany(User::class, 'id_fungsional', 'id');
    }
}
