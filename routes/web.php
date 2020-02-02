<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|https://styde.net/rutas-basicas-en-laravel-6/
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

use Illuminate\Support\Facades\DB;
use App\Note;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

Route::pattern('id', '\d+');

Route::get('/', function(){
    return 'Buscando usuario';
});

Route::get('notas', 'NoteController@index')->name('notes.index');

Route::get('notas/crear', 'NoteController@create')->name('notes.create');

Route::get('notas/{id}/editar', 'NoteController@edit')->name('notes.edit');

Route::get('notas/{id}', 'NoteController@show')->name('notes.show');

Route::put('notas/{notes}', 'NoteController@update')->name('notes.update');

Route::delete('notas/{id}', 'NoteController@destroy')->name('notes.destroy');

Route::post('notas', 'NoteController@store')->name('notes.store');

/* Route::get('/', function () {
    /* $notes = DB::table('notes')->get();
      */
    /*$notes = Note::all();
    return view('notes', ['notes' => $notes]);
})->name('notes.index'); */
 
/* Route::get('notes/crear', function () {
    //return 'Aquí podremos ver el formulario para crear notas';
    return view('add-note', ['notes' => '']);
})->name('notes.create'); */

/* Route::get('notes/{id}/editar', function ($id) {
    //return 'Aquí podremos editar la nota: '.$id;
    /* $notes = DB::table('notes')
        ->where('id', $id)
        ->first(); */
    /*$notes = Note::find($id);
    return view('add-note',  ['notes' => $notes]);
})->name('notes.edit'); */

/* Route::get('notes/{id}', function ($id) {
    return 'Aquí veremos los detalles de la nota: '.$id;
})->name('notes.show'); */

/* Route::post('notas', function (Request $request) {

    Request::validate([
        'title' => 'required',
        'content' => 'required',
        'title' => ['required', 'min:3', 'unique:notes'],
    ]);

    Note::create([
        
        'title' => Request::input('title'),
        'content' => Request::input('content'),
    ]);
    return redirect('/');
})->name('notes.store'); */


