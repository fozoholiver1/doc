<?php

namespace App\Http\Livewire\Connectyu\Documentation;

use App\Models\Documentation;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{


    use WithPagination;

    public $search = '';
    protected $queryString = ['search'];

    public function destroy($id){
        Documentation::find($id)->delete();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.connectyu.documentation.show',
            [
                'documentations' => Documentation::where('topic', 'like', '%'.$this->search.'%')->paginate(10),
            ]
        )->layout('layouts.guest');
    }
}
