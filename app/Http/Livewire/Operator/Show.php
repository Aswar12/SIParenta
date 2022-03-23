<?php

namespace App\Http\Livewire\Operator;

use Livewire\Component;
use App\Models\User;
use App\Models\Kegiatan;
use App\Models\butir;
use App\Models\fungsional;
use App\Models\transaksi;
class Show extends Component
{
    public function render()
    {
        $this->pegawai = User::join('transaksi', 'transaksi.id_user', '=', 'users.id')
        ->join('kegiatan', 'kegiatan.id', '=', 'transaksi.id_kegiatan')
        ->join('butir', 'butir.id', '=', 'kegiatan.id_butir')
        ->join('fungsional', 'fungsional.id', '=', 'Butir.id_fungsional')->get();
        return view('livewire.operator.show');
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
