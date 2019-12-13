@extends('layouts.app')
@section('content')

  <br><br><br><br>
  <div class="container">

   <section class="row  text-center ">
     <article class="col-12  " >
     <h1>Bienvenido: {{Auth::user()->name}}</h1>
     <p>
        <div class="imagen text-center" id="avatar" >
          {{Auth::user()->avatar}}
        </div>
     </p>
     <form action="/foto" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
                 <input type="file" class="form-control" name="avatar" id="avatar" value="">
         </div>
         <button type="submit" class="btn btn-primary">Subir foto</button>
     </form>
     </article>
   </section>
  </div>

@endsection
