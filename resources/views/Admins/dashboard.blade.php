<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('../../css/app.css')}}"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container col-xl-10 ">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1>GESTION ADMINISTRATIVE</h1>
            <hr>
        </div>
    </div>
    <br/>
    <div class="row">

        <div class="col-xl-12">
            <h3 class="text-center">Affichage des utilisateurs</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Name</th>
                        <th>Rôle</th>
                        <th>Email</th>
                        <th>IsActive</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td style="max-width: 10em;">{{ $user->firstname }}</td>
                        <td style="max-width: 10em;">{{ $user->name }}</td>
                        <td style="max-width: 10em;">{{ $user->roles }}</td>
                        <td style="max-width: 10em;">{{ $user->email }}</td>
                        <td style="max-width: 12em;">{{ $user->isActive }}</td>

                        <td class="text-center" style="max-width: 10em;">

                            <form class="form-horizontal" method="GET" action="{{ $user->id == null ? '/admin/form-inscription' :  '/admin/form-inscription/' . $user->id }}">
                                <button type="submit" class="btn btn-dark">Edit</button>
                            </form>


                            <form class="form-horizontal" method="GET" action="/admin/switch/{{ $user->id }} }}">
                                @if ($user->isActive)
                                <button type="submit" class="btn btn-warning">Disable
                                @else
                                </button><button type="submit" class="btn btn-success">Enable</button>
                                @endif
                            </form>



                            <form class="form-horizontal" method="GET" action="/admin/delete/{{ $user->id }} }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <input type="hidden" name="csrf_token" value=""/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('../../js/app.js')}}"></script>
</body>
</html>
