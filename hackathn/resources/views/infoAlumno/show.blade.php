@extends('layouts.app')

@section('title', "información {$users->id}")
@section('content')


<h1>el usuaruo es {{$users->id}}</h1>


<div style="margin-left: 3em;;" class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="{{asset('img/tc.jpg')}}" alt="...">
          </div>
          <div class="card-body">
        
            <div class="author">
             <a class="avatar2" data-toggle="modal" data-target="#exampleModal">
          
             
              <img id="avatar" class="avatar border-gray " src="<?php echo  asset('storage/imagenes/')?>/<?php echo $users->avatar ?>" alt="...">

            
               

            </a>
            
                                                 
              <h5  class="nombre">{{$users->name}}</h5>                                 
              
              <p class="descriptioon">
                @ {{$users->matricula}}
              </p>
            </div>
            <p class="descriptioon text-center">
              "{{$users->equipoName}}"
            </p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-6 ml-auto">
                  <h5 class="rol">{{$users->semestre}}
                    <br>
                    <small class="miembroos">Semestre</small>
                  </h5>
                </div>
                <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                  <h5 class="rol">{{$users->carrera}}
                    <br>
                    <small class="miembroos">Carrera</small>
                  </h5>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Miembros de equipo</h4>
          </div>
<!----------------------------inicio card body------------------------------------------>
          <div class="card-body">
            <h3 style="font-size: 30px; color:#ffffff;">404 Not found</h3>
          </br>
          <h3 style="font-size: 20px; color:#ffffff;">Sección en mantenimiento :(</h3>

          </div>

          <!----------------------------fin card body------------------------------------------>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">PROYECTO</h4>
          </div>
          <div class="card-body">
          
              <ul>
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">

                    </div>
                  </div>
                  <div class="col-md-7 col-7">
                    <h6 class="PROJ">Trip-On</h6>
                    <br />
                    
                  </div>
                
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection 
