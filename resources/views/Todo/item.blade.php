<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/item.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>item</title>

</head>
<body>
    <header class="navbar navbar-expand-lg bg-warning p-5 ">
         <ul>
            <li class="m-5"><a href="{{route('todo.create')}}">create todolist</a></li>
            <li class="m-5"><a href="{{route('todo.index')}}">manage todolist</a></li>
            <form action="{{ route('todo.search') }}" class="m-5" method="GET">
            <input type="search" name="search" placeholder="search-By-Title">
            <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </ul>
    </header>





<p class="first-div">
    @foreach ($item as $items )
    <span>
     <a href=""> {{$items->title}}   </a>
     <a href=""> {{$items->description}}</a>
     <a href="">{{$items->grouping}}</a>
    </span>
    @endforeach
</p>
</body>
</html>
