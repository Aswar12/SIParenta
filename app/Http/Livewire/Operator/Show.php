<?php

namespace App\Http\Livewire\Operator;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
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
