<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'],['resources/js/app.js'])
</head>
<body>
    <form action="/stagiaire/valider" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">prenom</label>
            <input type="text" class="form-control" name="prenom" >
        </div>
        <div class="form-group">
            <label for="age">age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="form-group">
            <label for="img">img</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>