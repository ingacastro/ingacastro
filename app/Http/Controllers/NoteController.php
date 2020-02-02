<?php

namespace App\Http\Controllers;
use App\Note;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('notes', ['notes' => $notes]);
    }

    public function show($id){
        return 'Aquí veremos los detalles de la nota: '.$id;
    }

    public function create()
    {
        return view('add-note');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => ['required', 'min:3', 'unique:notes'],
            'content' => 'required',
        ]);
    
        Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/');
    }

    public function edit($id){
        $notes = Note::find($id);
        return view('edit-note',  ['notes' => $notes]);
        //return ['notes' => $notes];
    }

    public function update(Note $notes, Request $request){
        $data = $this->validate($request, [
            'title' => ['required', 'min:3', Rule::unique('notes')->ignore($notes)],
            'content' => 'required',
        ]);

        $notes->update($data);
        return redirect('/');
    }

    public function destroy($id){
        /* $notes = Note::find($id);
        $notes->delete(); */
        DB::table('notes')->delete($id);
        return redirect('/');
    }

}
