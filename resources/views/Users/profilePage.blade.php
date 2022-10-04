<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('../../css/app.css')}}"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <div class="container-xl px-4 mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="">Mon profil</a>
            <a class="nav-link" href="">Sécurité</a>
        </nav>
        <hr class="mt-0 mb-4">

        <div class="row">

            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Image de profil</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile card-img w-75  rounded-circle mb-2"
                             src="https://previews.123rf.com/images/apoev/apoev1903/apoev190300009/124806570-personne-gris-espace-r%C3%A9serv%C3%A9-photo-homme-en-t-shirt-sur-fond-gris.jpg?fj=1" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Détails du compte</div>
                    <div class="card-body">

                        <div>Prénom : {{ $user->firstname }}</div>
                        <div>Nom : {{ $user->name }}</div>
                        <div>Email: {{ $user->email }}</div>

                        <button type="submit" class="btn btn-dark rounded">Enregistrer les changements</button>
                    </div>
                    <div class="card-body">
                    <button type="submit" class="btn btn-danger rounded">Supprimer mon compte</button>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('../../js/app.js')}}"></script>
</body>
</html>
