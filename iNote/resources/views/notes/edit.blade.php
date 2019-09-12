@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('home')
@section('title')
    them note
@endsection
@section('content')
    <div>
        <h2>sua note</h2>
        <form method="post" action="{{route('notes.update',$note->id)}}">
            @csrf
            <table class="table" border="px">
                <tr>
                    <td>title</td>
                    <td><input class="form-control" name="title" value="{{$note->title}}"></td>
                </tr>
                <tr>
                    <td>content</td>
                    <td><textarea class="form-control" name="contents" >{{$note->content}}</textarea></td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>
                        <select class="form-control" name="type_id">
                            @foreach($types as $type)
                                <option
                                    @if($note->type_id == $type->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        </td>
                </tr>
            </table>
            <button class="btn btn-primary" type="submit">submit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

        </form>
    </div>
@endsection

