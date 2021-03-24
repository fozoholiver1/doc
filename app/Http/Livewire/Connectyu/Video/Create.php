<?php

namespace App\Http\Livewire\Connectyu\Video;

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
        return view('livewire.connectyu.video.create')->layout('layouts.guest');
    }
}
