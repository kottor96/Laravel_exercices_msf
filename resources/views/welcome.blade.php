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
        <section>
            <div><h2>Formation</h2></div>
            <div>
                @foreach ($formations as $formation)
                    <p>{{$formation['nom']}}</p>
                    <p>{{$formation['description']}}</p>
                @endforeach
            </div>
        </section>
        <section>
            <div><h2>batiment</h2></div>
            <div>
                <p>{{$batiments[0]['nom']}} </p>
                <p>{{$batiments[0]['description']}} </p>
            </div>
        </section>

    </main>
</body>
</html>