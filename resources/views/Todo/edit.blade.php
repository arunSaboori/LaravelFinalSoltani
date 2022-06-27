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



    <form action="{{route('todo.update')}}" method="post">
        @csrf
        <div class=" row container-sm mb-3 mt-lg-4 ms-lg-5 g-4 ">


            <a href="" class="btn btn-primary col-1">back</a>
           
            

        <input type="text" name="name" value="{{$todo->name}}"  class="form-control"  placeholder="name">  



       <input type="text" name="title" value="{{$todo->title}}" class="form-control"   placeholder="title">  
            



            <button type="submit" class="  mt-5 btn btn-danger " >click-submit</button>   
            
        </form>
    
    
    
    
    
    
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>