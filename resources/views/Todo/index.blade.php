  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>todos list</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css ">

  </head>

  <body>
      <h1 class="container text-primary text-center m-lg-4">todolist</h1>
      <a href="{{ route('todo.create') }}" class="btn btn-primary mb-5 ms-lg-4">create data</a>
      <a href="{{ route('todo.item') }}" class="btn btn-primary mb-5 ms-lg-4">item page</a>
      <table class="table table-striped ">

          <tr>
              <th>title</th>
              <th>description</th>
              <th>grouping</th>
              <th>created at</th>
              <th>updated at</th>
              <th>action</th>
          </tr>

          @foreach ($todos as $todo)
              <tr>
                  <th>{{ $todo->title }}</th>
                  <th>{{ $todo->description }}</th>
                  <th>{{ $todo->grouping }}</th>
                  <th>{{ $todo->created_at }}</th>
                  <th>{{ $todo->updated_at }}</th>
                  <th>
                      <form action="{{ route('todo.index') }}" method="Post">
                          @csrf

                          <a class="btn btn-primary" href="{{ route('todo.edit', [$todo->id]) }}">Edit</a>
                          <a href="{{ route('todo.delete', [$todo->id]) }}" class="btn btn-danger">delete</a>
                        </form>
                        {{-- <form action="{{route('todo.time')}}">
                           @csrf
                            <button  class="btn btn-dark" value="" name="updated_time">time update</button>
                        </form> --}}
                    </th>
                </tr>
                @endforeach
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
          integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
      </script>
  </body>

  </html> 
