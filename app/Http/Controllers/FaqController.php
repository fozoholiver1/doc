<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(){
        Faq::create([

            'question' => request('question'),
            'user_id' => Auth::Id(),
            'faq-trixFields' => request('faq-trixFields')
        ]);

        return redirect( '/faqs');
    }


    public function update( $id){

        Faq::find($id)->update([

            'question' => request('question'),
            'user_id' => Auth::Id(),
            'faq-trixFields' => request('faq-trixFields'),
        ]);
        return redirect( '/faqs');
    }
}
