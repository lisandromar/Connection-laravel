@extends('layouts.app')
@section('content')
  <br>
  <br>
    <h2 class="text-center">Listado de Posteos</h2>
    <div>
    <form action="/buscarPosteo" method="GET">

        <input type="submit" value="Buscar Posteo"><input type="text" name="busqueda">
    </form>
    </div>
    <div class="">
      <button type="button" name="button"><a href="/agregarPosteo" class="btn btn">Postear</a></button>

    </div>

    <div class="spacer">
    <table class="table">
        <thead>
        <tr>
            <th>Avatar</th>
            <th>Usuario</th>
            <th>Comentario</th>
            <th>Track Compartido</th>

        </tr>
        </thead>
        <tbody>

            @foreach ($posteos as $posteo)
              <tr>
                <td>Avatar</td>
                <td>{{$posteo->user_id}}</td>
                <td>{{$posteo->comentario}}</td>
                <td><audio controls="controls ">
                  <source class="bg-dark" src="{{asset('storage/archivos/'.$posteo->archivo)}}" type="audio/ogg" />
                  <source src="{{asset('storage/archivos/'.$posteo->archivo)}}" type="audio/mpeg" />
                  </audio></td>
              </tr>
            @endforeach

            {{-- // Avatar y nombre del Usuario
            @foreach ($users as $user)
            <p>
                    <iframe width="560" height="315" src="{{asset('storage/fotoPerfil/'.$user->avatar)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h1>{{$user->name}}</h1>
            </p>
            @endforeach --}}
        </tbody>
    </table>
    <div>
    </div>
    </div>

@endsection
