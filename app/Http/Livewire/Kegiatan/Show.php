<?php

namespace App\Http\Livewire\Kegiatan;

use Illuminate\View\Component as ViewComponent;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Kegiatan;
use App\Models\Butir;
use Livewire\WithPagination;
use App\Models\Fungsional;

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
       return view('livewire.kegiatan.show',['data' => $data, 'kegiatans' => $kegiatans]);
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

        $this->nama_kegiatan = '';
        $this->search = '';
        $this->butir_cari = '';
        $this->satuan_kegiatan = '';
        $this->vol_kegiatan = null;
     }

     public function simpan(){
        
        $this->validate([
            'nama_kegiatan' => 'required',
            'butir_cari' => 'required',
            'satuan_kegiatan' => 'required',
            'vol_kegiatan' => 'required',
        ]);

        Kegiatan::updateOrCreate(
            ['id' => $this->kegiatanId],
            [
                'id_butir' => $this->butir_cari,
                'nama_kegiatan' => $this->nama_kegiatan,
                'satuan_kegiatan' => $this->satuan_kegiatan,
                'vol_kegiatan' => $this->vol_kegiatan,
            ]); 
       
            $this->dispatchBrowserEvent('save',[
                'title' => 'Berhasil',
                'type' => 'success',
                'icon' => 'success',
                'timer' => 3000,
                'text' =>'Kegiatan berhasil disimpan',              
            ] );
            $this->freshinput();
      
          $this->closemodal();
          //redirect
    
    }
    public function edit($id){
        
        
        $this->OpenModal(); 
        $kegiat = Kegiatan::findOrfail($id);
        $this->kegiatanId = $id;
        $this->nama_kegiatan = $kegiat->nama_kegiatan;
        $this->butir_cari = $kegiat->id_butir;
        $this->satuan_kegiatan = $kegiat->satuan_kegiatan;
        $this->vol_kegiatan = $kegiat->vol_kegiatan;
        
    }

    public function deleteConfirmation($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $this->dispatchBrowserEvent('confirmDelete', [
            'title' => 'Perhatian',
            'icon' => 'warning',
            'iconColor'=> 'red',
            'text' =>'Apakah Anda Yakin Menghapus Kegiatan '. $kegiatan->nama_kegiatan .' ?',
            'id' => $id,
        ]);
    }
    public function delete($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();
       
    }
    
    
}
