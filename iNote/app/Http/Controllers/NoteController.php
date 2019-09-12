<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteType;
use App\Note;
use App\Type;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.list', compact('notes'));
    }

    public function store()
    {
        $types = Type::all();
        return view('notes.store', compact('types'));
    }

    public function create(StoreNoteType $request)
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
        $types = Type::all();
        return view('notes.edit', compact('note', 'types'));
    }

    public function update(StoreNoteType $request, $id)
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
