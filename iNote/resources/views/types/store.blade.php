@extends('home')
@section('title')
    them type
@endsection
@section('content')
    <div>
        <h2>them type</h2>
        <form method="post" action="{{route('types.create')}}">
            @csrf
            <table border="px">
                <tr>
                    <td>title</td>
                    <td><input name="name"></td>
                </tr>
            </table>
            <button type="submit">submit</button>
        </form>
    </div>
@endsection
