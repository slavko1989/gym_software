<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categories;
use App\Models\Member;
use App\Models\Companies;
use App\Models\Trainer;

class CreateMember extends Component
{
    public function render()
    {
        
        return view('livewire.create-member',
        [
            'cat'=>Categories::all(),
            'comp'=>Companies::all(),
            'members'=>Member::paginate(3),
            't'=>Trainer::all()
        ]);
    }
}
