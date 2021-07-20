<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        @foreach($cities as $city)
            <div class="card">
                <h1>{{$city->title}}</h1>
                <img width="200" src="{{$city->image_city}}" alt="">
                <p>{{$city->description}}</p>
                <p><strong>voto:</strong> {{$city->vote}}</p>
                <p><strong>Info: </strong> {{$city->phone}}</p>
                <p><strong>email: </strong> {{$city->email}}</p>
                <p> <strong> prezzo:</strong> {{$city->price}}</p>
            </div>
        @endforeach
    </body>
</html>
