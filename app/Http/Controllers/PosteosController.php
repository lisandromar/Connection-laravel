<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;
use App\User;


class PosteosController extends Controller
{




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posteos.agregarPosteo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($miId){
        //dd(Auth::user()->id);
        //$miUser = User::find(Auth::user()->id);
        //dd($miUser);
        //$amigos=User::find();
        $posteos = Posteo::Paginate(10);
        $users = User::all();

        //$miId= Auth::user()->id;
        // $miUsuario= User::where('id',$miId);
        //$posteos=Posteo::where('user_id',$miId)->paginate(10);

        return view('posteos.listadoPosteos',compact('posteos','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posteos.editarPosteos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('posteos.eliminarPosteos');
    }

    public function search(Request $request){
        $buscar = $request->busqueda;
        $posteos = Posteo::where('comentario','like','%'.$buscar.'%')->paginate(10);
        return view('posteos.listadoPosteos')->with('posteos',$posteos);

    }
}
