<?php

namespace App\Http\Livewire\Connectyu\Faq;

use App\Models\Faq;
use Livewire\Component;

class Edit extends Component
{
    public Faq $faq;
    public function mount($faq){

        $this->faq=$faq;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.connectyu.faq.edit')->layout('layouts.guest');
    }
}
