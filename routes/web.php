<?php

use App\Http\Livewire\Connectyu\Documentation\Create;
use App\Http\Livewire\Connectyu\Documentation\Show;
use App\Http\Controllers\DocumentationsController;
use App\Http\Controllers\FaqController;
use App\Http\Livewire\Connectyu\Faq\Edit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// connectyu strikes
Route::get('/',App\Http\Livewire\Connectyu\Strikes\Show::class );
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});




//connectyu documentation routes /**/
//livewire
Route::get('/documents/create',Create::class)->middleware('auth');
Route::get('/documents',Show::class);
Route::get('/documentations/{documentation}', \App\Http\Livewire\Connectyu\Documentation\Edit::class)->middleware('auth');
Route::get('/documents/{document}', Show::class);

Route::post('/documentations',[DocumentationsController::class,'store'])->middleware('auth');
Route::patch('/documentations/{id}',[DocumentationsController::class,'update'])->middleware('auth');

//connectyu documentation routes /**/
//livewire
Route::get('/faqs/create',\App\Http\Livewire\Connectyu\Faq\Create::class)->middleware('auth');
Route::get('/faqs',\App\Http\Livewire\Connectyu\Faq\Show::class);
Route::get('/faqs/{faq}', Edit::class)->middleware('auth');
//Route::get('/faqs/{faq}', \App\Http\Livewire\Connectyu\Faq\Show::class);

Route::post('/faqs',[FaqController::class,'store'])->middleware('auth');
Route::patch('/faqs/{id}',[FaqController::class,'update'])->middleware('auth');


//video routes
Route::get('/videos/create',\App\Http\Livewire\Connectyu\Video\Create::class);
Route::get('/videos',\App\Http\Livewire\Connectyu\Video\Show::class);



//auth users dashboard route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
