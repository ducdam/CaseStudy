@extends('home')
@section('title')
    type
@endsection
@section('content')
    <div>
        <h2>Type</h2>
        <table border="px">
            <tr>
                <td>stt</td>
                <td>name</td>
                <td>xoa</td>
                <td>sua</td>
            </tr>
            @foreach($types as $key => $type )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$type->name}}</td>
                    <td><a href="{{route('types.destroy',$type->id)}}">xoa</a></td>
                    <td><a href="{{route('types.edit',$type->id)}}">sua</a></td>
                </tr>
                @endforeach
        </table>
        <a href="{{route('types.store')}}">them</a>
    </div>
@endsection
