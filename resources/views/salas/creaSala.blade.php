@extends('layouts.app')
@section('titol')
    Crea Sala
@endsection
@section('contingut')
    <form action="/guardar-sala" method="post">
        @csrf
        <section class="vh-100" style="background-color: #2779e2;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">

                        <h1 class="text-white mb-4">Crea Sala</h1>

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Num Sala</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="number" class="form-control form-control-lg" name="numSala" id="numSala"/>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Sala Ocupada</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" name="salaOcupada" id="salaOcupada">
                                    </div>
                                </div>

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Crea</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
