@extends('layouts.app')

@section('content')
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
                        <th>delete</th>
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
                        <td style="max-width: 12em;">{{ $user->deleted_at }}</td>

                        <td class="text-center" style="max-width: 10em;">

                            <form class="form-horizontal" method="GET" action="{{ $user->id == null ? '/admin/form-inscription' :  '/admin/form-inscription/' . $user->id }}">
                                <button type="submit" class="btn btn-dark">Edit</button>
                            </form>

                            @if(!$user->deleted_at)
                            <form class="form-horizontal" method="GET" action="/admin/switch/{{ $user->id }} }}">
                                <button type="submit" class="btn btn-success">Soft delete</button>
                            </form>
                            @endif



                            <form class="form-horizontal" method="GET" action="/admin/delete/{{ $user->id }} }}">
                                <button type="submit" class="btn btn-danger">Hard Delete</button>
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
@endsection
