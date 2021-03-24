<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{ public $search;
    use WithPagination;


    protected $queryString = ['search'];

//where to increment the number of strikes
    public function destroy($id){
        User::find($id)->delete();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(  )
    {  $strikes= User::all();
        return view('livewire.users',[ 'users' => User::where('name', 'like', '%'.$this->search.'%')->paginate(8)]);
    }
}
