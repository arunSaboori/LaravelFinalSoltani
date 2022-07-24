<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
        <title>search</title>
    </head>
    <body>
        <a class="btn btn-primary" href="{{ route('todo.item') }}"> back</a>

        <table class="table table-striped ">
            <table class="table table-striped ">

                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>grouping</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>action</th>
                </tr>

                @foreach ($posts as $todos )
                    <tr>
                        <th>{{ $todos->title }}</th>
                        <th>{{ $todos->description }}</th>
                        <th>{{ $todos->grouping }}</th>
                        <th>{{ $todos->created_at }}</th>
                        <th>{{ $todos->updated_at }}</th>
                        <th>
                            <form action="{{ route('todo.index') }}" method="Post">
                                @csrf

                                <a class="btn btn-primary" href="{{ route('todo.edit', [$todos->id]) }}">Edit</a>
                                <a href="{{ route('todo.delete', [$todos->id]) }}" class="btn btn-danger">delete</a>
                              </form>
                          </th>
                      </tr>
                      @endforeach
            </table>

</body>
</html>



