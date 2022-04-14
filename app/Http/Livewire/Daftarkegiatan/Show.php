<?php

namespace App\Http\Livewire\Daftarkegiatan;

use App\Models\Butir;
use App\Models\Kegiatan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
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
        $datakegiatan = $this->search == null ? 
        Transaksi::where('id_user', Auth::user()->id)->with(['kegiatan','kegiatan.butir', 'kegiatan.butir.fungsional'])->paginate($this->paginate):
        Transaksi::where('id_user', Auth::user()->id)->with(['kegiatan', 'kegiatan.butir','kegiatan.butir.fungsional'])
        ->orWhere(function($query) use ($cari) {
            $query->whereHas('butir.fungsional', function($query) use ($cari) {
                $query->where('nama_fungsional', 'like', '%'. $cari. '%');
            });
        })->paginate($this->paginate);

        // dd($kegiatans);
       return view('livewire.daftarkegiatan.show',['data' => $data, 'datakegiatan' => $datakegiatan]);
    }
}
