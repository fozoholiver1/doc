<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Support\Facades\Auth;

class DocumentationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(){
       Documentation::create([

            'device' => request('device'),
            'topic' => request('topic'),
            'user_id' => Auth::id(),
            'documentation-trixFields' => request('documentation-trixFields'),
        ]);

        return redirect( '/documents');
    }


    public function update( $id){


      Documentation::find($id)
          ->update([

            'device' => request('device'),
            'topic' => request('topic'),
            'user_id' => Auth::id(),
            'documentation-trixFields' => request('documentation-trixFields'),
        ]);

        return redirect( '/documents');
    }

}
