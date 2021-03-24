<?php

namespace App\Http\Livewire\Connectyu\Strikes;
use App\Models\Strike;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component

{




    public function render( )
    {

        return view('livewire.connectyu.strikes.show')->layout('layouts.guest');
    }
}
