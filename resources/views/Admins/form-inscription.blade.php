@extends('layouts.app')

@section('content')
<body>
<div class="container mt-5">
    @if (isset($user))
        <form method="POST" action="{{ action('App\Http\Controllers\AdminController@updateUserForm',[$user->id]) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Firstname:</label><span class="text-danger" id="spanfirstname"></span>
                <input type="text" class="form-control" name="firstname" id="firstname"
                       @if (isset($user))value="{{ $user->firstname }}" @endif>

            </div>

            <div class="form-group">
                <label>Name:</label><span class="text-danger" id="spanName"></span>
                <input type="text" class="form-control" name="name" id="name"
                       @if(isset($user))value="{{ $user->name }}"@endif>
            </div>

            <div class="form-group">
                <label>Email:</label><span class="text-danger" id="spanEmail"></span>
                <input type="email" class="form-control" name="email" id="email"
                       @if(isset($user))value="{{ $user->email }}"@endif>
            </div>

            @if(!isset($user))
                <div class="form-group">
                    <label>Password:</label><span class="text-danger" id="spanPassword"></span>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            @endif

            <div class="form-group">
                <label>Roles:</label><span class="text-danger" id="spanRoles"></span>
                <div>
                    <input type="radio" id="user" name="roles" value="ROLE_USER" checked>
                    <label for="user">Utilisateur</label><br>
                    <input type="radio" id="admin" name="roles" value="ROLE_ADMIN">
                    <label for="admin">Admin</label><br>
                </div>
            </div>

            <input id="btn" type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>

            @else
                <form method="post" action="{{ action('App\Http\Controllers\AdminController@createUserForm') }}">
                    @csrf
                    <div class="form-group">
                        <label>Firstname:</label> <span class="text-danger" id="spanfirstname"></span>
                        <input type="text" class="form-control" name="firstname" id="firstname"
                               @if (isset($user))value="{{ $user->firstname }}" @endif>

                    </div>

                    <div class="form-group">
                        <label>Name:</label> <span class="text-danger" id="spanName"></span>
                        <input type="text" class="form-control" name="name" id="name"
                               @if(isset($user))value="{{ $user->name }}"@endif>
                    </div>

                    <div class="form-group">
                        <label>Email:</label><span class="text-danger" id="spanEmail"></span>
                        <input type="email" class="form-control" name="email" id="email"
                               @if(isset($user))value="{{ $user->email }}"@endif>
                    </div>

                    @if(!isset($user))
                        <div class="form-group">
                            <label>Password:</label> <span class="text-danger" id="spanPassword"></span>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Roles:</label><span class="text-danger" id="spanRoles"></span>
                        <div>
                            <input type="radio" id="user" name="roles" value="ROLE_USER" checked>
                            <label for="user">Utilisateur</label>
                            <br>
                            <input type="radio" id="admin" name="roles" value="ROLE_ADMIN">
                            <label for="admin">Admin</label><br>
                        </div>
                    </div>

                    <input id="btn" type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                </form>
                    @endif
</div>
@endsection
