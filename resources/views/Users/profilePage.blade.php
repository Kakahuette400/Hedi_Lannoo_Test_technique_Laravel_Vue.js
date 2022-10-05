@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container-xl px-4 mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ route('user.profilePage') }}">Mon profil</a>
            <a class="nav-link" href="{{ route('password.request') }}">
            {{ __('Change Your Password') }}
            </a>
        </nav>
        <hr class="mt-0 mb-4">

        <div class="row">

            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Image de profil</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile card-img w-75  rounded-circle mb-2"
                             src="https://previews.123rf.com/images/apoev/apoev1903/apoev190300009/124806570-personne-gris-espace-r%C3%A9serv%C3%A9-photo-homme-en-t-shirt-sur-fond-gris.jpg?fj=1"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Détails du compte</div>
                    @if(session()->get('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success: </strong>{{session()->get('message')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.profilePageUpdate') }}">
                            @csrf
                            <label for="firstname"
                                   class="col-md-4 col-form-label text-start">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text"
                                       class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                       value="{{ $user->firstname }}" required autocomplete="firstname" autofocus>
                            </div>

                            <label for="name" class="col-md-4 col-form-label text-start">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                            </div>

                            <label for="email" class="col-md-4 col-form-label text-start">{{ __('email') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ $user->email }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="pt-5">
                            <button type="submit" class="btn btn-dark rounded">Enregistrer les changements</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body pt-5 text-end">
                        <form method="get" action="{{ route('user.profilePageDisabled') }}">
                            @csrf
                        <button type="submit" class="btn btn-danger rounded">Supprimer mon compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
