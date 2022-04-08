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
use Livewire\WithPagination;

class Show extends Component
{
    public $paginate = 5;
    use WithPagination;
    public $Kegiatan,  $butir, $cari, $search;

    
    public function render()
    {    
        $pegawais = User::with('fungsional')->get();

        $cari = $this->search;
        $kegiatans = $this->search == null ? 
        Kegiatan::with(['butir', 'butir.fungsional'])->paginate($this->paginate) : 
        Kegiatan::with(['butir', 'butir.fungsional'])->where('nama_kegiatan', 'like', '%'. $this->search .'%')
        ->orWhere(function($query) use ($cari) {
            $query->whereHas('butir.fungsional', function($query) use ($cari) {
                $query->where('nama_fungsional', 'like', '%'. $cari. '%');
            });
        })->paginate($this->paginate);

        // dd($kegiatans);
       return view('livewire.dashboard.show',['kegiatans' => $kegiatans, 'pegawais' => $pegawais]);
    }
}
