<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posteo;

class AdminUsuariosController extends Controller
{
  public function index(){
    $users = User::paginate(10);

    return view('admin.listadoUsuarios')->with('users',$users);
  }

  public function show($id){
    $user = User::find($id);
    $posteos = Posteo::find($user->Posteos);

    return view('admin.detalleUsuario',compact('posteos','user'));
  }
}
