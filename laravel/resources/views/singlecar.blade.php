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

        a{
            text-decoration: none;
            color: black;
        }

        .car-title {
            width: fit-content;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin: auto;
        }

        .car{
            display: flex;
            flex-direction: row;
            width: 500px;
            background-color: #fff;
            padding: 10px;
            margin: 20px auto;
        }

        .car span.price {
            color: rgb(0, 241, 0);
            font-weight: bold;
        }

        .car p {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1 class="car-title">{{$car->brand}} - {{$car->model}}</h2>

    <div class="cars">
        <div class="car">

            <p><strong>Miltal: </strong> {{$car->mileage}}</p>
            <p><strong>Drivmedel: </strong> {{$car->fuel_type}} </p>
            <p><strong>Årsmodell: </strong> {{$car->model_year}} </p>
            <p><strong>Price: </strong><span class="price">{{$car->price}}SEK</span> </p>
        </div>
    </div>
</body>
</html>
