@extends('layouts.app')

@section('content')
    <div class= "jumbotron text-center">
        <h1>{{$title}}</h1>
        <h1>Halaman index</h1>
        <p><a class="btn btn-primary btn-lg" href="../public/login" role="button">Login</a><a class="btn btn-success btn-lg"href="../public/register" role="button">Registrasi</a></p>
    </div>
@endsection