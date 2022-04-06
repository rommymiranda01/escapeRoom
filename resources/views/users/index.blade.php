@extends('layouts.app')
@section('titol')
    Llista d'Usuaris
@endsection
@section('contingut')
    @if(Auth::user()->rol=='admin')
    <h1 class="text-center my-5">Llista d'Usuaris</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rol}}</td>
            <td>
                <a href="/users/{{$user->id}}/editar"
                   class="btn btn-info btn-sm my-3">
                    Editar
                </a>
                <a href="/users/{{$user->id}}/eliminar"
                   class="btn btn-danger btn-sm my-3">
                    Eliminar
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <h1>Hello</h1>
    @endif
@endsection
