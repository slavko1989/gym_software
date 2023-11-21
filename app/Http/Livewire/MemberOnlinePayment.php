<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categories;
use App\Models\Member;
use App\Models\Companies;
use App\Models\Trainer;
use App\Models\Locations;

class MemberOnlinePayment extends Component
{
    public function render()
    {
        return view('livewire.member-online-payment' , 
            [
            'cat'=>Categories::all(),
            'comp'=>Companies::all(),
            'l'=>Locations::all(),
            't'=>Trainer::all()
        ]);
    }
}
