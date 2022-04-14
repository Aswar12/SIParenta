<?php

namespace App\Http\Livewire\Daftarkegiatan;

use App\Models\Butir;
use App\Models\Kegiatan;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{ 
    public $cari, $kegiatan, $nama_kegiatan, $search, $butir, $satuan_kegiatan, $vol_kegiatan, $ketid;
    protected $queryString = ['search'];
    public $nama_fungsional;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['delete'];
    public $isOpen = 0;
    public $butir_cari;
    public $kegiatanId;
    protected $kegiatans;
    public $paginate = 5;
    use WithPagination;
    public function render()
    {
        $data = Butir::where('nama_butir', 'like', '%'.$this->butir_cari.'%')->orWhere('id', 'like', '%'.$this->search.'%')->get();
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
       return view('livewire.daftarkegiatan.show',['data' => $data, 'kegiatans' => $kegiatans]);
    }
}
