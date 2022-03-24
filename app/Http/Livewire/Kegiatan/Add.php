<?php

namespace App\Http\Livewire\Kegiatan;

use Illuminate\Support\Facades\App;

use App\Models\kegiatan;
use Livewire\Component;
use Livewire\Livewire;

class Add extends Component
{   

    public  $nama_kegiatan = "aswar";
    public function render()
    {   
       
        return view('livewire.kegiatan.add' ,);
    }
}
