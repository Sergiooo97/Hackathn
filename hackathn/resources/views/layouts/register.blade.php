<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hackathon -@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('demo/demo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Ruda&display=swap" rel="stylesheet">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <style>
    input[type=”file”]#avatar {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }
 label[for=" avatar"] {
 font-size: 14px;
 font-weight: 600;
 color: #fff;
 background-color: #106BA0;
 display: inline-block;
 transition: all .5s;
 cursor: pointer;
 padding: 15px 40px !important;
 text-transform: uppercase;
 width: fit-content;
 text-align: center;
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
body{
  background-image: url(' {{ asset('loginAsset/images/isc_bg2.jpg') }}'); background-repeat: no-repeat; background-size: cover;

}

.input100 {
  font-family: Poppins-Medium;
  font-size: 15px;
  line-height: 1.5;
  color: #666666;

  display: block;
  width: 100%;
  background: #ffffff;
  height: 40px;
  border-radius: 25px;
  padding: 0 30px 0 68px;
}


   </style>
</head>
<body>


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
                <a class="navbar-brand" href="{{route('home')}}">Hackathon</a>

              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>

                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">

                          <p class="navbar-brand" href="#pablo">Registro</p>

                  </li>

                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->



    </div> -->
 @yield('content')
</body>
</html>
