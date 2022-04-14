<?php

namespace App\Http\Livewire\Berikegiatan;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\butir;
use App\Models\User;
use App\Models\Fungsional;
use App\Models\Kegiatan;
use App\Models\Transaksi;
use phpDocumentor\Reflection\Types\This;

class Show extends Component
{
    public $cari, $kegiatan, $nama_pegawai, $search, $butir, $username, $email, $nip, $peran, $password;
    protected $queryString = ['search'];
    public $nama_fungsional, $kegiatan_cari,  $cari_pegawai, $vol_transaksi;
    protected $listeners = ['delete'];
    public $isOpen = 0;
    public $status = 'Belum Dikerjakan';
    protected $kegiatans;
    public $pegawaiId = 0;
    public $kegiatanId = 0;
    public $paginate = 5;
    use WithPagination;
    public function render()
    {   
       
        $cari = $this->search;
        $kegiatans = $this->search == null ? 
        Kegiatan::with(['butir', 'butir.fungsional'])->paginate($this->paginate) : 
        Kegiatan::with(['butir', 'butir.fungsional'])->where('nama_kegiatan', 'like', '%'. $this->search .'%')->orWhere('id', 'like', '%'. $this->search .'%')
        ->orWhere(function($query) use ($cari) {
            $query->whereHas('butir.fungsional', function($query) use ($cari) {
                $query->where('nama_fungsional', 'like', '%'. $cari. '%');
            });
        })->paginate($this->paginate);
        // $transaksi = $this->search == null ?
        // Transaksi::with(['user', 'user.fungsional', 'kegiatan', 'kegiatan.butir', 'butir.fungsional' ])->paginate($this->paginate);
        $data = User::where('name', 'like', '%'.$this->cari_pegawai.'%')->orWhere('id', 'like', '%'.$this->cari_pegawai.'%')->get();
        return view('livewire.berikegiatan.show',['data' => $data, 'kegiatans' => $kegiatans, ]);
    }
    public function OpenModal()
    {
        $this->isOpen=true;
       
    }
    public function closemodal()
    {
        $this->isOpen = false;
    }
    public function freshinput(){

        $this->nama_pegawai = '';
        $this->search = '';
        $this->cari_pegawai = '';
        $this->vol_transaksi = '';
        $this->nama_kegiatan = '';
      
     }

     public function simpan(){
        // dd($this);
        $this->validate([
            
            'vol_transaksi' => 'required',
            ]);
            
            $transaksi = new Transaksi();
            $transaksi->id_user = $this->pegawaiId;
            $transaksi->id_kegiatan = $this->kegiatanId;
            $transaksi->vol_transaksi = $this->vol_transaksi;
            $transaksi->status = $this->status;
            $transaksi->save();
            $this->freshinput();
            $this->dispatchBrowserEvent('save',[
                'title' => 'Berhasil',
                'type' => 'success',
                'icon' => 'success',
                'timer' => 3000,
                'text' =>'Kegiatan Berhasil Ditambahkan',              
            ] );
            $this->freshinput();
      
          $this->closemodal();
          //redirect
    
    }
    public function edit($kegiatId){
    
        $this->OpenModal(); 

        $kegiatedit = Kegiatan::findOrfail($kegiatId);
        $this->nama_kegiatan = $kegiatedit->nama_kegiatan; 
        $this->kegiatanId = $kegiatedit->id;
    }

    public function deleteConfirmation($id)
    {
        $pegawai = User::findOrFail($id);
        $this->dispatchBrowserEvent('confirmDelete', [
            'title' => 'Perhatian',
            'icon' => 'warning',
            'iconColor'=> 'red',
            'text' =>'Apakah Anda Yakin Menghapus Pegawai '. $pegawai->name .' ?',
            'id' => $id,
        ]);
    }
    public function delete($id)
    {
        $pegawai = User::findOrFail($id);
        $pegawai->delete();
       
    }
    
}
