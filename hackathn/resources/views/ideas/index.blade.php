@extends('layouts.app')
@section('title','Ideas')
@section('content')

<div style="padding:1em;" class="content d-flex flex-row justify-content-center alig-items-center">
    <div class="row">
      <div class="col-lg-12 col-md-21 col-sm-12 ">
        <div style="width: 90%; height:80%;" class="card card-stats">
          <div  class="card-body scroll  ">
            <div style="padding:1em;" class="row card_01 d-flex flex-row justify-content-center alig-items-center">

            @foreach ($ideas  as $idea)                                
                <div class="card card-idea" style="width: 18rem; margin:1em;">
                    <div class="card-body">
                    <h2 class="card-title">{{$idea->tituloIdea}}  <p class="nombre" style="font-size: 15px;">{{$idea->userName}}</p> </h2>                   
                      <h6 class="card-subtitle mb-2 text-muted">{{$idea->created_at}}</h6>
                    <p style="color: #ffffff;" class="card-text">{{$idea->descripcion}}</p>
                       <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
            @endforeach
                  
            </div>
          </div>
          <div  class="card-footer">
            <div class="container">
                <div class="row">
                  <div class="col-sm-3">
                  <form method="POST" action="{{route('ideas.store')}}">
                    @csrf
                    <label style="font-size: 20px;" for="tituloIdea">Titulo</label>
                    <input name="tituloIdea" id="tituloIdea" style="height: 3em;" class="input-proyecto" type="text" required/>
                  </div>
                  <div class="col-sm">
                    <textarea class=" input-proyecto" name="descripcion" id="descripcion" rows="3" placeholder=" Escribe tu idea para tu equipo.." required></textarea>

                  </div>
                  <div class="col-sm-3">
                   <button class="button-hackathn" type="submit">Enviar</button>
                  </div>
                </form>
                </div>
              </div>

          </div>

        </div>
      </div>
    

    </div>

@endsection
    
