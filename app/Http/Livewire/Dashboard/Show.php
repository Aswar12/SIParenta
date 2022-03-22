<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kegiatan;
use App\Models\User;
use iluminate\Http\Request;
use App\Models\Butir;
use App\Models\Fungsional;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class Show extends Component
{
    public function render()
    {   
        $this->kegiatan = Kegiatan::join('butir', 'kegiatan.id_butir', '=', 'butir.id')->join('fungsional', 'fungsional.id', '=', 'Butir.id_fungsional')->get();
        $this->pegawai = User::join('transaksi', 'transaksi.id_user', '=', 'users.id')
        ->join('kegiatan', 'kegiatan.id', '=', 'transaksi.id_kegiatan')
        ->join('butir', 'butir.id', '=', 'kegiatan.id_butir')
        ->join('fungsional', 'fungsional.id', '=', 'Butir.id_fungsional')->get();
        return view('livewire.dashboard.show');
    }
}
