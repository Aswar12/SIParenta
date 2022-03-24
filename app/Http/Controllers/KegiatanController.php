<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){
        return view('tambah_kegiatan' );
    }
    public $openmodal=0;
    public function OpenModal()
    {
        $this->openmodal=1;
       
    }
    public function closemodal()
    {
        $this->openmodal=0;
    }
}
