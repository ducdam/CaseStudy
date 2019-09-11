@extends('home')
@section('title')
    note
@endsection
@section('content')
    <div>
        <h2>note</h2>
        <table border="px">
            <tr>
                <td>stt</td>
                <td>title</td>
                <td>content</td>
                <td>type</td>

                <td>xoa</td>
                <td>sua</td>
            </tr>
            @foreach($notes as $key => $note )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$note->title}}</td>
                    <td>{{$note->content}}</td>
                    <td>{{$note->type_id}}</td>
                    <td><a href="{{route('notes.destroy',$note->id)}}">xoa</a></td>
                    <td><a href="{{route('notes.edit',$note->id)}}">sua</a></td>
                </tr>
            @endforeach
        </table>
        <a href="{{route('notes.store')}}">them</a>
    </div>
@endsection
