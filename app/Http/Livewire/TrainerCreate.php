<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Trainer;
use App\Models\Program;

class TrainerCreate extends Component
{
    public function render()
    {
        return view('livewire.trainer-create',[
            'trainer'=>Trainer::all(),
            'prg'=>Program::all()
        ]);
    }
}
