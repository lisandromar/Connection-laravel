@extends('layouts.app')
@section('content')
<h2 class="text-center">Detalles del Posteo:</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <ul class="list-group list-group-flush">
            <li class="list-group-item ">Comentario: {{$posteo->comentario}}</li>
            <li class="list-group-item ">Archivo: {{$posteo->archivo}}</li>
            <li class="list-group-item ">Fecha y Hora: {{$posteo->created_at}}</li>


                <li class="list-group-item">Usuario: @foreach ($users as $user)
                                                      <ul>
                                                        <li>{{"Nombre: ".($user->name)}}</li>
                                                        <li>{{"Email: ".($user->email)}}</li>
                                                        <li>{{"ID: ".($user->id)}}</li>
                                                        <li></li>
                                                      </ul>
                                                      @endforeach</li>

            </ul>

        </div>
        <a href="/administrarPosteos" class="btn btn-danger">Volver</a>
    </div>

</div>

@endsection
