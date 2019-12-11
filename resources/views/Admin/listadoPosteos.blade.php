@extends('layouts.app')
@section('content')
    <br>
    <br>
    <h2 class="text-center">Listado de Posteos</h2>
    <div>
    <form action="/buscarPosteoAdmin" method="GET">

        <input type="submit" value="Buscar"><input type="text" name="busqueda">
    </form>
    </div>

    <div class="spacer">
    <table class="table">
        <thead>
        <tr>
            <th>Comentario</th>
            <th>Archivo</th>
            <th>Usuario</th>
            <th>Ver</th>
            {{-- <th>Editar</th> --}}
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($posteos as $key => $value)
              <tr>
                <td>{{$value->comentario}}</td>
                <td>{{$value->archivo}}</td>
                <td>{{$value->user_id}}</td>
                <td><a href="/detallePosteo/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
                {{-- <td><a href="/editarPosteo/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td> --}}
                <td><a href="/eliminarPosteo/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
              </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        {{$posteos->links()}}
    </div>

    </div>

@endsection
