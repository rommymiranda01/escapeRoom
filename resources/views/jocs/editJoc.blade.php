@extends('layouts.app')
@section('titol')
    Crea Joc
@endsection
@section('contingut')
    <section class="vh-100" style="background-color: #2779e2;">
        <div class="container h-100">
            <form action="/jocs/{{$joc->id}}/actualitzar-joc" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">

                        <h1 class="text-white mb-4">Crea Joc</h1>

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Nom</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" class="form-control form-control-lg" name="nom" id="nom" value="{{old('nom',$joc->nom)}}">

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Num Jugadors</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="number" class="form-control form-control-lg" name="numJugadors" id="numJugadors" value="{{old('numJugadors',$joc->numJugadors)}}">
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Edita</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
