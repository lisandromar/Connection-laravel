<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posteo;

class AdminPosteosController extends Controller
{
  public function index(){
  $posteos = Posteo::paginate(10);
  // $users = User::find($posteos->user);
  //dd($turnos);
  return view('admin.listadoPosteos',compact('posteos'));
}

public function show($id){
  $posteo = Posteo::find($id);
  $users = User::find($posteo->users);

  return view('admin.detallePosteo',compact('posteo','users'));
}

}
