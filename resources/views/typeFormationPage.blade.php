<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <div><h2>type de formation</h2></div>
            <div>
                @foreach ($typeFormations as $type)
                    <div>
                        <p>{{$type['nom']}}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</body>
</html>