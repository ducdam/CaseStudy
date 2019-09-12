<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::paginate(2);
        return view('types.list',compact('types'));
    }

    public function store()
    {
        return view('types.store');
    }

    public function create(Request$request)
    {
        $type = new  Type();
        $type->name = $request->name;
        $type->save();
        return redirect()->route('types.list');
    }

    public function edit($id)
    {
        $type = Type::find($id);
        return view('types.edit',compact('type'));
    }

    public function update(Request$request,$id)
    {
        $types = Type::findOrFail($id);
        $types->name = $request->name;
        $types->save();
        return redirect()->route('types.list');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect()->route('types.list');
    }

}
