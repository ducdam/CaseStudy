@extends('home')
@section('title')
    CREATE TYPE
@endsection
@section('content')
    <div>
        <h2>CREATE TYPE</h2>
        <form method="post" action="{{route('types.create')}}">
            @csrf
            <table class="table" border="10px">
                <tr>
                    <td>title</td>
                    <td><input   class="form-control"  name="name"></td>
                </tr>
            </table>
            <button class="btn btn-secondary"  type="submit">submit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
@endsection
