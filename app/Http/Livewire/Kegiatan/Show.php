<?php

namespace App\Http\Livewire\Kegiatan;

use Illuminate\View\Component as ViewComponent;
use Livewire\Component;
use App\Models\Kegiatan;

class Show extends Component
{
    public function render()

    {
        $this->kegiatan = Kegiatan::join('butir', 'kegiatan.id_butir', '=', 'butir.id')->join('fungsional', 'fungsional.id', '=', 'Butir.id_fungsional')->get();
        return view('livewire.kegiatan.show');
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
