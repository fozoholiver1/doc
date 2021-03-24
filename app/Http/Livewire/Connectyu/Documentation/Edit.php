<?php

namespace App\Http\Livewire\Connectyu\Documentation;

use App\Models\Documentation;
use Livewire\Component;

class Edit extends Component
{
public Documentation $documentation;


public function mount($documentation){
    $this->documentation=$documentation;
}
    public function render( )
    {

        return view('livewire.connectyu.documentation.edit')->layout('layouts.guest');
    }
}
