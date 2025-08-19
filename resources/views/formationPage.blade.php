<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div><h2>Formation</h2></div>
        <div>
            @foreach ($formations as $formation)
                <p>{{$formation['nom']}}</p>
                <p>{{$formation['descrption']}}</p>
            @endforeach
        </div>
    </section>
</body>
</html>