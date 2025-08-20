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
            <h2>Liste des stagiaires</h2>
        </div>
        <div>
            @foreach ($stagiaires as $stagiaire)
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('storage/'.$stagiaire['img'])}}" height="200px" class="card-img-top" alt="{{$stagiaire['nom']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$stagiaire['nom'].' - '.$stagiaire['prenom']}}</h5>
                        <p class="card-text">{{$stagiaire['age']}}</p>
                    </div>
                    <form action="{{route('destroy_stagiaire',$stagiaire ->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="virer" class="bg-danger text-warning">
                    </form>
                </div>
            @endforeach
        </div>
        <div>
            <a href="/stagiaire/form">ajouter des stagiaire</a>
        </div>
    </section>
</body>
</html>