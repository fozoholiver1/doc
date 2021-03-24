<?php

namespace App\Http\Livewire;

use App\Models\Strike;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;
class StrikeTable extends Component
{

    public $search;
   use WithPagination;


    protected $queryString = ['search'];

    //where to decrement the number of strikes
    public function edit($id ,$value){
        if ( $value>=2&&$value<=3 ){
            $value=+$value- 1;
            Strike::find($id)->update(['value'=>$value]);
        }

    }
//where to increment the number of strikes
    public function update($id ,$value){
        if ($value<=2 && $value>=1){
            $value=+$value+ 1;
            Strike::find($id)->update(['value'=>$value]);
        }
    }
//where to increment the number of strikes
    public function destroy($id){
        Strike::find($id)->delete();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(  )
    {  $strikes= Strike::all();
        return view('livewire.strike-table',[ 'strikes' => Strike::where('name', 'like', '%'.$this->search.'%')->paginate(6)]);
    }
}
