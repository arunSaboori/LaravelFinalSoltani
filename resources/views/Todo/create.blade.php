<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos edit</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css ">
</head>
<body>



    <form action="{{route('todo.store')}}" method="post">
        @csrf

        <div class=" row container-sm mb-3 mt-lg-4 ms-lg-5 g-4 ">
            <a href="{{route('todo.index')}}" class= "btn btn-primary col-1">back</a>


            <input type="text" name="title" id="title" class="form-control" placeholder="title">
            @error('title')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <input type="text" name="description" id="description" class="form-control" placeholder="description">
            @error('description')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror


           <input type="text" name="grouping" id="grouping" class="form-control" placeholder="grouping">
             @error('grouping')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
             @enderror




            <button type="submit" class="  mt-5 btn btn-danger " >click-submit</button>

        </form>



    `



</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
