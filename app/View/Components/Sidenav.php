<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidenav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navigations = [
            'Dashboard' => 'dashboard',
            'Tambah Kegiatan' => 'pegawai',
            'Tambah Kegiatan' => 'pegawai',
            'Alokasi Kegiatan' => 'pegawai',
            'Daftar Pegawai' => 'pegawai',
            'Daftar Kegiatan' => 'pegawai',
            'Angka Kredit' => 'pegawai',


        ];

        return view('layouts.sidenav', compact('navigations'));
    }
}
