<?php

namespace App\Http\Livewire\Kegiatan;

use Illuminate\View\Component as ViewComponent;
use Livewire\Component;


class Show extends Component
{
    public function render()
    {
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
