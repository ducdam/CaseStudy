@extends('home')
@section('title')
    them note
@endsection
@section('content')
    <div>
        <h2>sua note</h2>
        <form method="post" action="{{route('notes.update',$note->id)}}">
            @csrf
            <table border="px">
                <tr>
                    <td>title</td>
                    <td><input name="title" value="{{$note->title}}"></td>
                </tr>
                <tr>
                    <td>content</td>
                    <td><input name="contents" value="{{$note->content}}"></td>
                </tr>
                <tr>
                    <td>type</td>
                    <td><input name="type_id" value="{{$note->type_id}}"></td>
                </tr>
            </table>
            <button type="submit">submit</button>
        </form>
    </div>
@endsection
