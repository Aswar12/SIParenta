<?php

namespace App\Http\Livewire\Daftarpegawai;

use App\Models\Fungsional;
use App\Models\Kegiatan;
use App\Models\Transaksi;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

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
        $data = Kegiatan::where('nama_kegiatan', 'like', '%'.$this->kegiatan_cari.'%')->orWhere('id', 'like', '%'.$this->kegiatan_cari.'%')->get();
        
        $pegawais = $this->cari_pegawai == null ?
        User::with(['fungsional','transaksi','transaksi.kegiatan','transaksi.kegiatan.butir'])->paginate($this->paginate):
        User::with(['fungsional','transaksi','transaksi.kegiatan','transaksi.kegiatan.butir'])->where('name', 'like', '%'. $this->cari_pegawai .'%')->orWhere('nip', 'like', '%'. $this->cari_pegawai .'%')->paginate($this->paginate);
        // User::where('name', 'like', '%'. $this->search .'%')->orWhere('email', 'like', '%'. $this->search .'%')->orWhere('username', 'like', '%'.$this->search.'%')->paginate($this->paginate);
        return view('livewire.daftarpegawai.show',['data' => $data, 'pegawais' => $pegawais, 'kegiatans' => $kegiatans, ]);
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
        $this->vol_transaksi = '';
      
     }

     public function simpan(){
        // dd($this);
        $this->validate([
            'nama_pegawai' => 'required',
            'search' => 'required',
            'vol_transaksi' => 'required',
            ]);
        
            $transaksi = new Transaksi();
            $transaksi->id_user = $this->pegawaiId;
            $transaksi->id_kegiatan = $this->kegiatanId;
            $transaksi->vol_transaksi = $this->vol_transaksi;
            $transaksi->status = $this->status;
            $transaksi->save();
            $this->freshinput();
        // User::updateOrCreate(
        //     ['id' => $this->pegawaiId],
        //     [
        //         'id_fungsional' => $this->fungsional_cari,
        //         'name' => $this->nama_pegawai,
        //         'username' => $this->username,
        //         'email' => $this->email,
        //         'nip' => $this->nip,
        //         'peran' => $this->peran,
        //         'password' => bcrypt('password'),
        //     ]); 
       
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
    public function edit($postId){
        $this->pegawaiId = $postId;
        $this->OpenModal(); 
        $useredit = User::findOrfail($postId);
        $this->nama_pegawai = $useredit->name; 
    }
    public function storeKegiatan($kegiatId){
        $this->kegiatanId = $kegiatId;
        $this->OpenModal(); 
        $kegiatedit = Kegiatan::findOrfail($kegiatId);
        $this->search = $kegiatedit->nama_kegiatan; 
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
