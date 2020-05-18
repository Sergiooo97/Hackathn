
@extends('layouts.app')

@section('title', "información")
@section('content')

  <!------------------------MODAL subir im{agen de perfil -------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Subir imágen de perfil :) </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        
            

            <form  method="POST" action="{{route('infoAlumno.store')}}" enctype="multipart/form-data">
              @csrf               
                <input name="avatar" type="file"  id="avatar" >
                <small id="emailHelp" class="form-text text-muted">La imágen debe pesa menor a 2 MB :(</small>
               <button type="submit" class="btn btn-primary">Subir</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <!----------------------------fin Modal --------------------------->



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
              
                 
                  <img id="avatar" class="avatar border-gray " src="<?php echo  asset('/uploads/imagenes')?>/<?php echo auth()->user()->avatar?>" alt="...">

                
                   

                </a>
                  @foreach ($users as $user)
                      
                  
                <a href="{{route('infoAlumno.show',['id' => $user->id])}}">
                  
                    @endforeach
                                                       
                  <h5 class="nombre">{{ auth()->user()->name}}</h5>                                 
                  </a>
                  <p class="descriptioon">
                    @ {{ auth()->user()->matricula}}
                  </p>
                </div>
                <p class="descriptioon text-center">
                  "{{ auth()->user()->equipoName}}"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-6 ml-auto">
                      <h5 class="rol"><?php echo auth()->user()->semestre  ?>
                        <br>
                        <small class="miembroos">Semestre</small>
                      </h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                      <h5 class="rol">{{ auth()->user()->carrera}}
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
                <ul class="list-unstyled team-members">
                  
             
                  <li>
                    <!---- Row ------>
                    @foreach($users as $user)
                    <div class="row ">
                      <div class="col-md-2 col-2 d-flex flex-row justify-content-center alig-items-center">
                        
                     <div class="avatar ">
                     <img  src="<?php echo asset('/uploads/imagenes')?>/<?php echo $user->avatar?>" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    
                        </div>
                     
                      </div>
                      <div class="col-md-7 col-7">
                      
                        <span class="text-muted">
                          <small class="rol">{{$user->rol}}</small>
                        </span>
                        <h6 class="title">
                          <a href="{{route('infoAlumno.show',['id' => $user->id])}}">
                          {{ $user->name }}&nbsp;{{ $user->lastName}}</h6>
                          </a>
                        <br />
                        <span class="text-danger">
                        </span>
                      </div>
                     
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon<"><a href="mauricio.html"><i class="nc-icon nc-single-02"></i></a></btn>
                      </div>
                    </div>
                    @endforeach
                     <!---- Row ------>
                  </li>
                </ul>
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
                        <h6 class="PROJ">{{ auth()->user()->proyectoName}}</h6>
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
     
    </div>
  </div>
  <!--   Core JS Files   -->

  
@endsection 

<!-- <div id="inicio" class="view " style=" "> -->
