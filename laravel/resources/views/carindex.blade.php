<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Document</title>
    <style>
        html {
            background-color: #333;
            font-family: 'Nunito', sans-serif;
        }


        h1{
            margin: auto;
            width: fit-content;
            height: fit-content;
            color: #fff;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .cars{
            display: flex;
            width: 900px;
            margin: 20px auto;
            justify-content: space-evenly;
        }

        .car{
            width: 300px;
            background-color: #fff;
            padding: 10px;
        }

        .car span.price {
            color: rgb(0, 241, 0);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Cars for sale</h1>

    <div class="cars">
        @foreach($cars as $car)
        <a href="{{route('car.show', $car->id)}}">
        <div class="car">

            <h2>{{$car->brand}} - {{$car->model}}</h2>
            <p><strong>Miltal: </strong> {{$car->mileage}}</p>
            <p><strong>Drivmedel: </strong> {{$car->fuel_type}} </p>
            <p><strong>Årsmodell: </strong> {{$car->model_year}} </p>
            <p><strong>Price: </strong><span class="price">{{$car->price}}SEK</span> </p>
        </div>
        </a>

        @endforeach
    </div>
</body>
</html>
