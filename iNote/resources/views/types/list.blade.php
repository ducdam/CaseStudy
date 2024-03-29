@extends('home')
@section('title')
TYPE
@endsection
@section('content')
    <div>
        {{ $types->links() }}

        <h2>TYPE</h2>
        <table class="table" border="10px"  >
            <tr>
                <td scope="col">stt</td>
                <td>name</td>
                <td>number note</td>
                <td>action</td>

            </tr>
            @foreach($types as $key => $type )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$type->name}}</td>
                    <td>{{ count($type->note) }}</td>

                    <td><a  class="btn btn-primary"  href="{{route('types.destroy',$type->id)}}">xoa</a>
                    <a  class="btn btn-primary"  href="{{route('types.edit',$type->id)}}">sua</a></td>
                </tr>
                @endforeach
        </table>
        <div>
            <a  class="btn btn-primary"  href="{{route('types.store')}}">them</a>
        </div>

    </div>
@endsection
