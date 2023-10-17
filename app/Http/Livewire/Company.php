<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Companies;

class Company extends Component
{
    public function render()
    {
        return view('livewire.company',
    [
            'comp'=>Companies::all() 
        ]);
    }
}
