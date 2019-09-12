<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')'</title>
</head>
<body>
<a  class="btn btn-primary"  href="{{route('notes.list')}}">note</a>

<a  class="btn btn-primary"  href="{{route('types.list')}}">type</a>

<div class="col-6">

    <form method="post" class="navbar-form navbar-left" action="{{route('notes.search')}}">

        @csrf

        <div class="row">

            <div class="col-8">

                <div class="form-group">

                    <input type="text" name="keyword" class="form-control" placeholder="Search">

                </div>

            </div>

            <div class="col-4">

                <button type="submit" class="btn btn-primary">Tìm kiếm</button>

            </div>

        </div>

    </form>

</div>
@yield('content')
</body>
</html>
