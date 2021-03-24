<?php

namespace App\Http\Livewire\Connectyu\Video;

use App\Models\Video;
use Livewire\Component;

class Show extends Component
{


    public $search = '';

    protected $queryString = ['search'];

    public function destroy($id){
        Video::find($id)->delete();

    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.connectyu.video.show',
            [
                'videos' => Video::where('title', 'like', '%'.$this->search.'%')->paginate(6),
            ])->layout('layouts.guest');
    }
}
