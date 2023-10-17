<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Program;
class ProgramsCreate extends Component
{
    public function render()
    {
        return view('livewire.programs-create',[
                'program'=>Program::all()
        ]);
    }
}
