<?php

namespace App\Http\Livewire;

use App\Models\Strike;
use Livewire\Component;

class StrikeSearch extends Component
{
    public $search = '';

    protected $queryString = ['search'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.strike-search',

            [
                'strikes' => Strike::where('name', 'like', '%'.$this->search.'%')->paginate(10),
            ]
        );
    }
}
