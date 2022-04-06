@extends('layouts.app')
@section('titol')
    Llista de Jocs
@endsection
@section('contingut')
<h1 class="text-center my-5">Llista de Jocs</h1>
<a class="btn btn-success float-right" href="/crea-joc">Crea Joc</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Img</th>
        <th scope="col">Num Jugadors</th>
        <th scope="col">Options</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jocs as $joc)
        <tr>
            <td>{{$joc->nom}}</td>
            <td>{{$joc->img}}</td>
            <td>{{$joc->numJugadors}}</td>
            <td>
                <a href="/jocs/{{$joc->id}}/editar"
                   class="btn btn-info btn-sm my-3">
                    Editar
                </a>
                <a href="/jocs/{{$joc->id}}/eliminar"
                   class="btn btn-danger btn-sm my-3">
                    Eliminar
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
