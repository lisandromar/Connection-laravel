@extends('layouts.app')
@section('content')
<h2 class="text-center">Detalles del Usuario: {{($user->name)}}</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <ul class="list-group list-group-flush">
            <li class="list-group-item ">Nombre: {{$user->name}}</li>
            <li class="list-group-item ">Email: {{$user->email}}</li>
                <li class="list-group-item">Posteos: @foreach ($posteos as $posteo)
                                                      <ul>
                                                        <li>Comentario: {{($posteo->comentario)}}</li>
                                                        <li>Archivo:{{($posteo->archivo)}}</li>
                                                        <li>Fecha y Hora: {{($posteo->created_at)}}</li>
                                                      </ul>
                                                      @endforeach</li>

            </ul>

        </div>
        <a href="/administrarUsuarios" class="btn btn-danger">Volver</a>
    </div>

</div>

@endsection
