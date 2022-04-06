@extends('layouts.app')
@section('titol')
    Edita User
@endsection
@section('contingut')
    <h1 class="text-center my-5">Editar User</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">
                    Editar user
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/users/{{$user->id}}/actualitzar-user" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control"
                                   name="username"
                                   id="username"
                                   placeholder="Username..."
                                   value="{{old('username',$user->username)}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control"
                                   name="email"
                                   id="email"
                                   placeholder="Email..."
                                   value="{{old('email',$user->email)}}">
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                Actualitzar Informació
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
