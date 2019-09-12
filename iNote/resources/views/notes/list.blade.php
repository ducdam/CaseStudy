@extends('home')
@section('title')
    note
@endsection
@section('content')
    <div>
        <h2>note</h2>
        <table class="table" border="px">
            <tr>
                <td>stt</td>
                <td>title</td>
                <td>content</td>
                <td>type</td>

                <td>action</td>
            </tr>
            @foreach($notes as $key => $note )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$note->title}}</td>
                    <td>{{$note->content}}</td>
                    <td>{{$note->type->name}}</td>
                    <td><a  class="btn btn-primary"  href="{{route('notes.destroy',$note->id)}}">xoa</a>
                   <a  class="btn btn-primary"  href="{{route('notes.edit',$note->id)}}" >sua</a></td>
                </tr>
            @endforeach
        </table>
        <a  class="btn btn-primary"  href="{{route('notes.store')}}">them</a>

    </div>
@endsection
