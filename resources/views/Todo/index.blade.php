 {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos index</title>
    <link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css ">
    
</head>
<body>
    <h1 class="container text-primary text-center m-lg-4">todos INDEx</h1>


    <a href="" class="btn btn-primary mb-5 ms-lg-4">create data</a>


    <table class="table table-striped ">
        <tr>
            <th>name</th>
            <th>title</th>
            <th>action</th>
        </tr>

   @foreach ($todos as $todo )
    <tr>
    <th>{{$todo->name}}</th>
    <th>{{$todo->id}}</th>
    <th>
        <form action="{{route('todo.index')}}" method="Post">
        <a class="btn btn-primary" href=>Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </th>
</tr>
@endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html> --}}