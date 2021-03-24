<?php

namespace App\Http\Livewire\Forms;

use App\Models\Documentation;
use Livewire\Component;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\TallForm;
class CreateDocumentation extends Component
{
    use TallForm;


    public function mount(?Documentation $documentation)
    {
        //Gate::authorize()
        $this->fill([
            'formTitle' => trans('global.create').' '.trans('crud.documentation.title_singular'),
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/Wrapper-Layout
            'showGoBack' => false,
        ]);
        $this->mount_form($documentation); // $documentation from hereon, called $this->model
    }


    // Mandatory method
    public function onCreateModel($validated_data)
    {
        // Set the $model property in order to conditionally display fields when the model instance exists, on saveAndStayResponse()
        $this->model = Documentation::create($validated_data);
    }

    // OPTIONAL method used for the "Save and stay" button, this method already exists in the TallForm trait
    public function onUpdateModel($validated_data)
    {
        $this->model->update($validated_data);
    }

    public function fields()
    {
        return [
            Input::make('device type')->rules('required')->type('text'),
            Input::make('topic')->type('text')->rules('required'),
            Input::make('body')->type('textarea')
        ];
    }
}
