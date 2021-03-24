<?php

namespace App\Http\Livewire\Connectyu\Documentation;
use App\Models\Documentation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.connectyu.documentation.create')->layout('layouts.guest');
    }
}
