@extends('layouts.app')
@section('titol')
    Llista de Sales
@endsection
@section('contingut')
    <h1 class="text-center my-5">Llista de Sales</h1>
    <a class="btn btn-success float-right" href="/crea-sala">Crea Sala</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Num Sala</th>
            <th scope="col">Sala Ocupada</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($salas as $sala)
            <tr>
                <td>{{$sala->numSala}}</td>
                <td>{{$sala->salaOcupada}}</td>
                <td>
                    <a href="/salas/{{$sala->id}}/editar"
                       class="btn btn-info btn-sm my-3">
                        Editar
                    </a>
                    <a href="/salas/{{$sala->id}}/eliminar"
                       class="btn btn-danger btn-sm my-3">
                        Eliminar
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
