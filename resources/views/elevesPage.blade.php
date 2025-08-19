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
        <div>
            <h2>Student</h2>
        </div>
        <div>
            @foreach ($eleves as $eleve)
                <div>
                    <p>{{$eleve['nom'].' '.$eleve['prenom'].' '.$eleve['age'].' '.$eleve['etat']}}</p>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>