<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css ">
</head>

<body>



    <form action="{{ route('todo.update' ,[$todo->id] )}}" method="POST">
        @csrf
        <div class=" row container-sm mb-3 mt-lg-4 ms-lg-5 g-4 ">
            <a href="{{ route('todo.index') }}" class="btn btn-primary col-1">back</a>











            <input type="text" id="title" name="title" value="{{ $todo->title }}" class="form-control"
                >
            @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror


            <input type="text" id="description" name="description" value="{{ $todo->description }}" class="form-control"
                >
            @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror


            <input type="text" id=" grouping" name="grouping" value="{{ $todo->grouping }}" class="form-control"
                >
            @error('grouping')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror






            <button type="submit" class="  mt-5 btn btn-danger ">click-submit</button>

    </form>







    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
