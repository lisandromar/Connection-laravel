<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posteo;

class AdminPosteosController extends Controller
{
  public function index(){
  $posteos = Posteo::with('user')->paginate(10);
  $users = User::all();
  return view('admin.listadoPosteos',compact('posteos','users'));
}

public function show($id){
  $posteo = Posteo::find($id);
  $userId=$posteo->userId();
  $users = User::find($userId);

  return view('admin.detallePosteo',compact('posteo','users'));
}

  public function search(Request $request){
      $buscar = $request->busqueda;
      $posteos = Posteo::where('comentario','like','%'.$buscar.'%')->paginate(10);
      return view('admin.listadoPosteos')->with('posteos',$posteos);

  }
  public function delete($id){
    $posteo =  Posteo::find($id);
    $posteo->delete();
    return redirect('admin.listadoPosteos');

  }

}
