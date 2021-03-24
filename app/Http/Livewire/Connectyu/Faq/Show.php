<?php

namespace App\Http\Livewire\Connectyu\Faq;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $search = '';

    protected $queryString = ['search'];

    public function destroy($id){
        Faq::find($id)->delete();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.connectyu.faq.show',
            [
                'faqs' => Faq::where('question', 'like', '%'.$this->search.'%')->paginate(8),
            ]
        )->layout('layouts.guest');
    }
}
