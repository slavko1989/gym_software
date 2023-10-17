<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Locations;

class LocationsCreate extends Component
{
    public function render()
    {
        return view('livewire.locations-create',
        [
                'locs'=>Locations::all()
        ]);
    }
}
