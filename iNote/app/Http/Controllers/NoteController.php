<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.list',compact('notes'));
    }

    public function store()
    {
        return view('notes.store');
    }

    public function create(Request$request)
    {
        $note = new  Note();
        $note->title = $request->title;
        $note->content = $request->contents;
        $note->type_id = $request->type_id;
        $note->save();
        return redirect()->route('notes.list');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        return view('notes.edit',compact('note'));
    }

    public function update(Request$request,$id)
    {
        $notes = Note::findOrFail($id);
        $notes->title = $request->title;
        $notes->content = $request->contents;
        $notes->type_id = $request->type_id;
        $notes->save();
        return redirect()->route('notes.list');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('notes.list');
    }
}
