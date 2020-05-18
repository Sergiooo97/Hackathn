<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/logo-tecmotul22.png')}} " />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hackathon - @yield('title')</title>

    
   
    
   
<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Ruda&display=swap" rel="stylesheet"><!-- Fonts -->
   <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap-file/css/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat-list.css') }}" rel="stylesheet">


   <!-- Scripts -->   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="{{ asset('js/app.js') }}" ></script>
   

  <style>

/*Ejemplo 1*/
.avatar2 img {
transition: all 0.2s linear;
}
.avatar2 .mascara {
opacity: 0;
background-color: rgba(46,157,120, 0.7);
transition: all 0.3s ease-in-out;
}
.avatar2 h2 {
transform: translateX(-200px);/*Desplazamos a la izquierda*/
opacity: 0;
transition: all 0.7s ease-in-out;
}
.avatar2 p {
transform: translateX(200px);/*Desplazamos a la derecha*/
opacity: 0;
transition: all 0.4s linear;
}
.avatar2 a.link{
opacity: 0;
transition: all 0.4s ease-in-out;
transform: translateY(100px)/*Desplazamos para abajo*/
}
.avatar2:hover img {
transform: scale(1.1);/*Damos un ligero zoom a la imagen*/
}
.avatar2:hover .mascara {
opacity: 1;
}
.avatar2:hover h2,
.avatar2:hover p,
.avatar2:hover a.link {
opacity: 1;
transform: translateX(0px);/*Regresamos a las posiciones originales*/
}
.avatar2:hover p {
transition-delay: 0.1s;
}
.avatar2:hover a.link {
transition-delay: 0.2s; /*Aplicamos un pequeño retardo para que se muestre al final*/
transform: translateY(0px);
}








  .logos{
    background:#043c5c;
   }
   .logos>a{
   color: #ffffff;
   }
   @font-face {
  font-family: "Northern";
  src: url("../fonts/NorthernTerritories.ttf") format("truetype");
  }

  .titleceneae{
                font-family:Northern;
                font-size: 30px
              }
     .font-natacad{
      font-family:Northern;

      }
.card .card-footer {
  margin-top: 1em;
  border: 0;
}
.card{
  background:rgba(2, 35, 54, 0.7);
}

 .logos>a{
 color: #ffffff;
 }

.logos{
  background:rgba(2, 35, 54, 1.0);
  color: #ffffff;
}

.slider-label{
  color:rgb(202, 202, 202);
  font-size: 16px;
  font-family: 'Ruda';
}



li.active > a> p {
  color: #ffffff;


}

li.active > a {
  color: #ffffff;
  opacity: 1;
  background:rgb(7, 33, 51);
  border-radius: 5px;
  font-size: 18px;
  font-family: 'Ruda';

}

.sidebar[data-active-color="danger"] .nav li.active>a,
.sidebar[data-active-color="danger"] .nav li.active>a i,
.sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
.sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
.sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
.sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a,
.off-canvas-sidebar[data-active-color="danger"] .nav li.active>a,
.off-canvas-sidebar[data-active-color="danger"] .nav li.active>a i,
.off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
.off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
.off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
.off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a {
  color: #FFFFFF;
  opacity: 1;
  font-size: 16px;
  font-family: 'Ruda';
}
.proyecto{
  text-align: center;
  font-size: 22px;
}
.card_01{
 padding:2em;
  background:rgba(3, 46, 71, 0.7);
   border-radius:15px;
   color: #ffffff;
}
.card_001{
 padding:2em;
  background:rgba(3, 46, 71, 0.931);
   border-radius:15px;
   color: #ffffff;
}
.sidebar{
  background:rgba(3, 46, 71, 0.7);

}
.main-panel{

background: rgba(0, 0, 0, 0);
}
.descriptioon{color: #ffffff;
font-size: 18px;
}
.card-title{
  color: #ffffff;
font-size: 26px;
}
.miembros{
  color: #ffffff;
font-size: 20px;
font-family: 'Ruda';
}
.miembroos{
  font-weight: bold;
  color: #ffffff;
font-size: 20px;
font-family: 'Ruda';
}
.rol{
  color: #ffffff;
font-size: 16px;
font-family: 'Ruda';
}
.PROJ{
  text-align: center;
  color: #ffffff;
font-size: 46px;
font-family: 'Ruda';
}
.input-proyecto{
  border-radius: 10px;
  background: rgba(2, 35, 54, 0.7);
  border: solid 1px #ffffff;
  color: #ffffff;
  width: 100%;
}
.scroll {
    max-height: 65%;
    overflow-y: auto;
}
.scroll-chat-list {
  height: 225px;
    max-height: 225px;
    overflow-y: auto;
}
.button-hackathn{
  border-radius: 10px;
  border: solid 2px #51cbce;
  background: rgba(202, 202, 202, 0);
  color: #ffffff;
  width: 110px;
  height: 3em;
  margin-top: 0.7em;
}
.input-proyecto2{
  border-radius: 10px;
  background: rgba(2, 35, 54, 0.7);
  border: solid 1px #ffffff;
  color: #ffffff;
  width: 100%;
  height: 35px;
}
.button-hackathn2{
  border-radius: 10px;
  border: solid 2px #51cbce;
  background: rgba(202, 202, 202, 0);
  color: #ffffff;
  width: 110px;
  height: 2.5em;
  margin-top: 0.5em;
}
.button-hackathn:hover{
  border-radius: 10px;
  border: solid 2px #51cbce;
  background: rgba(255, 255, 255, 0.226);
  color: #ffffff;
  width: 110px;
  height: 3em;
  margin-top: 0.5em;
}
.card-idea:hover{
  -webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-ms-transform:scale(1.1);
-o-transform:scale(1.1);
transform:scale(1.1);
}
.alert-hackathn{
  position: absolute; 
  background:rgba(0, 110, 153, 0.602);
  color: #FFFFFF;
  border-radius: 15px;
  margin-left: 4px;
  
}
body{
  background-image: url(' {{ asset('img/bg_app.jpg') }}'); background-repeat: no-repeat; background-size: cover;
  background-attachment: fixed;
}

   </style>
      
      <livewire:styles>
        <livewire:scripts>
</head>
<body>
    <div class="wrapper ">
        <div class="sidebar"  data-active-color="danger">

          <div class="logo logos">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
              <div class="logo-image-large">
                <img src="{{ asset('img/TecNNM.png') }}" width="100px">
              </div>
            </a>
            <a style="color:#ffffff; " href="#" class="simple-text logo-normal">
              Tec Motul

            </a>
          </div>
          <div class="sidebar-wrapper logos">
            <ul class="nav">
              <li class="{{ request()->is('home') ? 'active' : '' }}" >
                <a href="{{route('home')}}">
                  <i class="nc-icon nc-bank"></i>
                  <p class="slider-label">Inicio</p>
                </a>
              </li>
              <li class="{{ request()->is('infoAlumno') ? 'active' : '' }}">
                <a href="{{route('infoAlumno')}}">
                  <i class="nc-icon nc-single-02"></i>
                  <p class="slider-label">Perfil </p>
                  <p class="proyecto">{{ auth()->user()->name}}</p>

                </a>
              </li>
              <li class="{{ request()->is('proyecto') ? 'active' : '' }}" >
                <a href="{{route('proyecto')}}">
                  <i class="nc-icon nc-laptop"></i>
                  <p class="slider-label">Proyecto</p>
                  <p class="proyecto">{{ auth()->user()->proyectoName}}</p>
                  <!-- <p class="proyecto">Trip-On</p> -->
                </a>
              </li>
              <li class="{{ request()->is('ideas') ? 'active' : '' }}">
                <a href="{{route('ideas')}}">
                  <i class="nc-icon nc-bulb-63"></i>
                  <p class="slider-label">Ideas</p>
                  <!-- <p class="proyecto">Trip-On</p> -->
                </a>
              </li>
              <li class="{{ request()->is('chat') ? 'active' : '' }}">
                <a href="{{route('chat')}}">
                  <i class="nc-icon nc-chat-33"></i>
                  <p class="slider-label">chat</p>
                  <!-- <p class="proyecto">Trip-On</p> -->
                </a>
              </li>



            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-absolute fixed-top  logos">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="#pablo">Hackathon</a>
                <a href="{{ url('/logout') }}"> cerrar sesión </a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
               
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link btn-magnify" href="#pablo">
                      <i class="nc-icon nc-layout-11"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Stats</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="nc-icon nc-bell-55"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-rotate" href="#pablo">
                      <i class="nc-icon nc-settings-gear-65"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Account</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <!-- <div class="panel-header panel-header-lg">

      <canvas id="bigD
          <!-- End Navbar -->
          <!-- <div class="panel-header panel-header-sm">


    </div> -->
 @yield('content')
 
</body>
</html>
