@extends('layouts.app')
@section('content')
  <br>
  <br>
    <h2 class="text-center">Listado de Usuarios</h2>
    <div>
    <form action="/buscarUsuario" method="GET">
        <input type="submit" value="Buscar"><input type="text" name="busqueda">
    </form>
    </div>

    <div class="spacer">
    <table class="table">
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th>Ver</th>
            {{-- <th>Editar</th> --}}
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($users as $key => $value)
                <tr>
                <td>{{($value->name)}}</td>
                <td>{{$value->email}}</td>
                <td><a href="/detalleUsuario/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
                {{-- <td><a href="/editarUsuario/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td> --}}
                <td><a href="/eliminarUsuario/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
                </tr>

            @endforeach

        </tbody>
    </table>
    <div>
        {{$users->links()}}
    </div>

    </div>

@endsection
