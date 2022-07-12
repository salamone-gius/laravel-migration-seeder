<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Trains</title>
    </head>
    <body>
        <div style="width: 100%; max-width: 1200px; margin: 50px auto; text-align: center;">
            <ul >
                @foreach ($trains as $train)
                    <li style="list-style: none; border: 2px solid goldenrod;margin-bottom: 30px; padding: 10px;">
                        <span>Codice treno: {{$train->train_code}}</span>
                        <p>Partenza da <span>{{$train->departure_station}}</span>
                             il <span>{{$train->departure_date}}</span>
                             alle ore: <span>{{date('H:m',strtotime( $train->departure_date))}}</span></p>
                        <p>Arrivo a <span>{{$train->arrival_station}}</span>
                             il <span>{{$train->arrival_date}}</span>
                             alle ore: <span>{{date('H:m',strtotime( $train->arrival_time))}}</span> </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>