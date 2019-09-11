@extends('home')
@section('title')
    them note
@endsection
@section('content')
    <div>
        <h2>sua note</h2>
        <form method="post" action="{{route('types.update',$type->id)}}">
            @csrf
            <table border="px">
                <tr>
                    <td>name</td>
                    <td><input name="name" value="{{$type->name}}"></td>
                </tr>
            </table>
            <button type="submit">submit</button>
        </form>
    </div>
@endsection
