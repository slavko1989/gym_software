<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;
use App\Models\Categories;
use App\Models\Companies;
use App\Models\Trainer;
use App\Models\Locations;

class WebCardAdminPanel extends Component
{
    public function render()
    {
        return view('livewire.web-card-admin-panel',
            [
                'cat'=>Categories::all(),
                'comp'=>Companies::all(),
                'l'=>Locations::all(),
                'web_card'=>Member::all(),
                't'=>Trainer::all()
        ]);
    }
}
