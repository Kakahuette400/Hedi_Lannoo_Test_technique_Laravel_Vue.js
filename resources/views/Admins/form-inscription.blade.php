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
<div class="container mt-5">
    @if (isset($user))
        <form method="POST" action="{{ action('App\Http\Controllers\AdminController@updateUserForm',[$user->id]) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname"
                       @if (isset($user))value="{{ $user->firstname }}" @endif>

            </div>

            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" name="name" id="name"
                       @if(isset($user))value="{{ $user->name }}"@endif>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email"
                       @if(isset($user))value="{{ $user->email }}"@endif>
            </div>

            @if(!isset($user))
                <div class="form-group">
                    <label>password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            @endif

            <div class="form-group">
                <label>roles</label>
                <div>
                    <input type="radio" id="user" name="roles" value="ROLE_USER">
                    <label for="user">Utilisateur</label><br>
                    <input type="radio" id="admin" name="roles" value="ROLE_ADMIN">
                    <label for="admin">Admin</label><br>
                </div>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>

            @else
                <form method="post" action="{{ action('App\Http\Controllers\AdminController@createUserForm') }}">
                    @csrf
                    <div class="form-group">
                        <label>firstname</label>
                        <input type="text" class="form-control" name="firstname" id="firstname"
                               @if (isset($user))value="{{ $user->firstname }}" @endif>

                    </div>

                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" id="name"
                               @if(isset($user))value="{{ $user->name }}"@endif>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                               @if(isset($user))value="{{ $user->email }}"@endif>
                    </div>

                    @if(!isset($user))
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    @endif

                    <div class="form-group">
                        <label>roles</label>
                        <div>
                            <input type="radio" id="user" name="roles" value="ROLE_USER" checked>
                            <label for="user">Utilisateur</label><br>
                            <input type="radio" id="admin" name="roles" value="ROLE_ADMIN">
                            <label for="admin">Admin</label><br>
                        </div>
                    </div>

                    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                </form>
                    @endif



</div>
</body>

</html>
