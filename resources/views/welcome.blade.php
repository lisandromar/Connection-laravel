@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=deviceS-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Exo:200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="animate.css-master/animate.css">

  <title>Connection</title>
</head>

<body class="bg-dark">
  <!-- *******************************navBar************************************ -->
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark "  >
      <a class="navbar-brand text-secondary " href="#">Connection</a>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  ">
          <li class="nav-item">
            <a class="nav-link  text-secondary" href="Perfil/Usuario.php">Muro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="Perfil/posteos_y_amigos.php">Comunidad</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-secondary" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preguntas</a>
            <div class="dropdown-menu bg-dark text-secondary" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-secondary" href="#preguntas">De qué se trata todo esto</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-secondary" href="#tracks">Tracks del Mes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-secondary" href="#">Lugares</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="formularios/formularioContacto.html">Contacto</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 bg-dark" type="search" placeholder="Buscar contenido" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit"><a href="formularios/formularioLogin.html">Login</a></button>
        </form>
      </div>
    </nav>
  </header>
  <!-- *******************************Carousel************************************ -->
  <div class="carousel ">
    <div class="bd-example ">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active  ">
            <video class="video-fluid" autoplay loop muted>
              <source src="video/video pagina 1.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-md-block">
              <h5 class="animated flip">Friedrich Nietzsche</h5>
              <p class="animated bounceInUp " style="animation-delay: .5s">Deberíamos considerar como días perdidos
                aquellos en los que no hayamos bailado al menos una vez.</p>
            </div>
          </div>
          <div class="carousel-item  ">
            <video class="video-fluid " autoplay loop muted >
              <source src="video/video pagina 2.mp4"  type="video/mp4" />
            </video>
            <div class="carousel-caption  d-md-block">
              <h5 class="animated  bounceInRight "> VH</h5>
              <p class="animated bounceInUp" style="animation-delay: .5s">La música expresa lo que no puede ser dicho y
                aquello sobre lo que es imposible permanecer en silencio.</p>
            </div>
          </div>
          <div class="carousel-item">
            <video class="video-fluid " autoplay loop muted >
              <source src="video/video pagina 3.mp4"  type="video/mp4" />
            </video>
            <div class="carousel-caption d-md-block">
              <h5 class="animated bounceInRight ">Confusio</h5>
              <p class="animated bounceInUp" style="animation-delay: .5s">La música produce un tipo de placer sin el que
                la naturaleza humana no puede vivir. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- *******************************fqs************************************ -->

  <div class="faq row"id=preguntas>
    <h3 class="col-12 d-flex justify-content-center animated rollIn"style="animation-delay: .5s">PREGUNTAS FRECUENTES</h3>
  <br>
  <br>
  <br>
      <section class="col-12 d-flex">
        <ul>
        <div>
          <h2 class="col-12 d-flex animated bounceInRight ">De qué se trata todo esto?</h2>
          <p class="animated bounceInLeft">Connection es una herramienta para las personas que aman la música electrónica y quieren compartir experiencias, anécdotas relacionadas con el género.</p>
        </div>

        <div>
            <h2 class="col-12 d-flex animated bounceInRight">Como subo Contenido?</h2>
            <p class="animated bounceInLeft">Es muy sensillo. Una vez registrado tendrás acceso a nuestra comunidad, donde podrás agregar amigos, vínculos, fotos, videos y música.</p>
          </div>
        <div>
            <h2 class="col-12 d-flex animated bounceInRight">Cómo puedo modificar la foto de perfil?</h2>
              <ul class="animated bounceInLeft">
                <li>Haz Click en tu foto de perfil > Presiona <strong>EDITAR</strong>. </li>
                <li>Busca y selecciona en tus archivos la imagen que desees y haz click en <strong>ACEPTAR</strong> para finalizar.</li>
              </ul>
        </div>
        <div>
            <h2 class="col-12 d-flex animated bounceInRight">Cómo invitar amigos?</h2>
            <p class="animated bounceInLeft">Dirigete a la pestaña comunidad > Selecciona <strong>AGREGAR AMIGOS</strong>. Luego presiona <strong>INVITAR AMIGOS</strong>.</p>
          </div>
      </ul>
        <div >
          <video class="col-12 " autoplay loop muted >
            <source src="video/video pagina club.mp4 "    type="video/mp4" />
          </video>

          <figure id=tracks>
          <br>
            <figcaption class="text-danger  ">Tracks elegidos de este mes:</figcaption>
            <br>
            <audio controls="controls ">
              <source class="bg-dark" src="audio\sebastien leger - rocket to lee's little cloud (original mix).mp3" type="audio/ogg" />
              <source src="audio\ARTBAT, Dino Lenny - Sand In Your Shoes (Original Mix).mp3" type="audio/mpeg" />
              </audio>
                <audio controls="controls">
                <source src="audio\ARTBAT, Dino Lenny - Sand In Your Shoes (Original Mix).mp3" type="audio/mpeg" />
              </audio>
              </audio>
                <audio controls="controls">
                <source src="audio\Cid Inc. - Contrite (Original Mix).mp3" type="audio/mpeg" />
              </audio>
            </figure>
        </div>
      </section>
  </div>































<footer class="row col-12  justify-content-center ">
      <br>
      <br>
        <p class=" align-self-center">Copyright &#169;El Trio Dinámico</p>
      <br>
      <br>
    </footer>
</div>







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
@endsection
