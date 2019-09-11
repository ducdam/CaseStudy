@extends('home')
@section('title')
    them note
@endsection
@section('content')
    <div>
        <h2>them note</h2>
        <form method="post" action="{{route('notes.create')}}">
            @csrf
            <table border="px">
                <tr>
                    <td>title</td>
                    <td><input name="title"></td>
                </tr>
                <tr>
                    <td>content</td>
                    <td><input name="contents"></td>
                </tr>
                <tr>
                    <td>type</td>
                    <td><input name="type_id"></td>
                </tr>
            </table>
            <button type="submit">submit</button>
        </form>
    </div>
@endsection
