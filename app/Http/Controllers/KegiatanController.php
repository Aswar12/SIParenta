<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function allWithButir()
    {
        $kegiatan = \App\Models\kegiatan::with('butir')->where('')->get();
        return response()->json($kegiatan);
    }
}
