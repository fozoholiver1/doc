<?php

namespace App\Http\Livewire\Connectyu\Faq;

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
        return view('livewire.connectyu.faq.create')->layout('layouts.guest');
    }
}
