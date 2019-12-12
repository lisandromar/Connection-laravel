@extends('layouts.app')
@section('content')
  
  <br>
    <h2 class="text-center">Listado de Posteos</h2>
    <div>
    <form action="/buscarPosteo" method="GET">

        <input type="submit" value="Buscar"><input type="text" name="busqueda">
    </form>
    </div>
    <div class="">
      <button type="button" name="button"><a href="/agregarPosteo" class="btn btn">Postear</a></button>

    </div>

    <div class="spacer">
    <table class="table">
        <thead>
        <tr>
            {{-- <th>Avatar</th> --}}
            <th>Usuario</th>
            <th>Comentario</th>
            <th>Track Compartido</th>

            {{-- <th>Editar</th> --}}
            {{-- <th>Eliminar</th> --}}
        </tr>
        </thead>
        <tbody>

            @foreach ($posteos as $key => $value)
              <tr>
                {{-- <td>{{$value->avatar}}</td> --}}
                <td>{{$value->user_id}}</td>
                <td>{{$value->comentario}}</td>
                <td>{{$value->archivo}}</td>
                {{-- <td><a href="/editarPosteo/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td> --}}
                {{-- <td><a href="/eliminarPosteo/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a> --}}
              </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        {{$posteos->links()}}
    </div>
    </div>

@endsection
