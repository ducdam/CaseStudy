@extends('home')
@section('title')
    them note
@endsection
@section('content')
    <div>
        <h2>sua note</h2>
        <form method="post" action="{{route('types.update',$type->id)}}">
            @csrf
            <table class="table" class="table" border="10px">
                <tr>
                    <td>name</td>
                    <td><input   class="form-control"  type="text" name="name" value="{{$type->name}}"></td>
                </tr>
            </table>
            <button  class="btn btn-primary"  type="submit">submit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

        </form>
    </div>
@endsection
