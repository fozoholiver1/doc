<?php

namespace App\Http\Livewire\Forms;

use App\Models\Strike;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\TallForm;

class CreateStrike extends Component
{
    use TallForm;

    public function mount(?Strike $strike)
    {
        //Gate::authorize()
        $this->fill([
            'formTitle' => trans('global.create').' '.trans('crud.strike.title_singular'),
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/Wrapper-Layout
            'showGoBack' => false,
            'showReset' => false,
            'showDelete' => false,

        ]);
        $this->mount_form($strike); // $strike from hereon, called $this->model
    }


    // Mandatory method
    public function onCreateModel($validated_data)
    {
        $validated_data['user_id']=Auth::id();//we are assigning the user_id to the authenticated user
        // Set the $model property in order to conditionally display fields when the model instance exists, on saveAndStayResponse()
        $this->model = Strike::create($validated_data);
    }

//    // OPTIONAL method used for the "Save and stay" button, this method already exists in the TallForm trait
//    public function onUpdateModel($validated_data)
//    {
//        $this->model->update($validated_data);
//    }

    public function fields()
    {
        return [
            Input::make('Name')->rules('required')->placeholder('Connectyu username,Example, fozoholiver'),
            Input::make('value')->rules('required')->type('number')->prefix('#')->max('3')->min('1')->placeholder('number of strikes'),
            Input::make('image')->rules('required')->type('url')->prefix('https://')->suffix('.com'),

        ];
    }
}
