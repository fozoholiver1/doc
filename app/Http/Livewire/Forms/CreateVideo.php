<?php

namespace App\Http\Livewire\Forms;

use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\TallForm;
use RealRashid\SweetAlert\Facades\Alert;
class CreateVideo extends Component
{
    use TallForm;

    public function mount(?Video $video)
    {
        //Gate::authorize()
        $this->fill([
            'formTitle' => trans('global.create').' '.trans('crud.video.title_singular'),
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/Wrapper-Layout
            'showGoBack' => false,
            'showReset' => false,
            'showDelete' => false,
        ]);
        $this->mount_form($video); // $video from hereon, called $this->model
    }


    // Mandatory method
    public function onCreateModel($validated_data)
    {        $validated_data['user_id']=Auth::id();//we are assigning the user_id to the authenticated user

        // Set the $model property in order to conditionally display fields when the model instance exists, on saveAndStayResponse()
        $this->model = Video::create($validated_data);
        redirect('/videos');
    }

    // OPTIONAL method used for the "Save and stay" button, this method already exists in the TallForm trait
    public function onUpdateModel($validated_data)
    {
        $this->model->update($validated_data);
    }

    public function fields()
    {
        return [

            Input::make('title')->rules('required')->placeholder('title of your youtube video'),
            Input::make('video')->rules('required')->type('url')->prefix('https://')->suffix('.com')->placeholder('link of youtube video'),

        ];
    }
}
