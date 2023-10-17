<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categories;

class CreateCat extends Component
{
    public function render()
    {
        $cat = Categories::all();
        return view('livewire.create-cat',compact('cat'));
    }

   
}
