<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class FaqSearch extends Component
{

    public $search = '';

//    protected $queryString = ['search'];

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
        return view('livewire.faq-search',
            [
//                'faqs' => Faq::where('question', 'like', '%'.$this->search.'%')->paginate(8),
                'faqs' => Faq::where('question',$this->search)->paginate(8),
            ]);
    }
}
