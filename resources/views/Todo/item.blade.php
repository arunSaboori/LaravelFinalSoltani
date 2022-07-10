<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>item</title>
</head>
<body>
    @foreach ($item as $items )
        
    <a href="" value="{{$items->id}}" >
        {{$items->title}}<br>
        {{$items->description}}<br>
        {{$items->grouping}}<br>
    
    
    </a>
    @endforeach
</body>
</html>