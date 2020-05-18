@extends('layouts.app')

@section('title', 'proyecto')
@section('content')

<!--------------------Modal Proyecto ----------------------->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content card-stats card_001">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">¡Registra tu proyecto!</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body card-body ">
       
        <form method="POST" action="{{ route('proyecto.store') }}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label style="font-size: 20px;" for="proyectoName">Nombre de tu proyecto</label>
            <input type="input" class="form-control input-proyecto" name="proyectoName" id="proyectoName" aria-describedby="nameHelp" placeholder="Aquí escribes el nombre de tu proyeto" required>
            <small id="nameHelp" class="form-text text-muted">Elige sabiamente el nombre de tu proyecto ;)</small>
          </div>

          <div class="form-group">
            <label  style="font-size: 20px;"  for="categoria">Categoria de tu proyecto</label>
            <input type="input" class="form-control input-proyecto" name="categoria" id="prcategoriaoyectoName" aria-describedby="categoriaHelp" placeholder="Categoria" required>
            <small id="categoriaHelp" class="form-text text-muted">un ejemplo puede ser: servicio.</small>
          </div>
          <div class="form-group">
            <label  style="font-size: 20px;"  for="problematica">Problemática</label>
            <input type="input" class="form-control input-proyecto" name="problematica" id="problematica" aria-describedby="problematicaHelp" placeholder="problemática" required>
          </div>
          <div class="form-group">
            <label  style="font-size: 20px;"  for="innovacion">innovación</label>
            <input type="input" class="form-control input-proyecto" name="innovacion" id="innovacion" aria-describedby="innovacionHelp" placeholder="innovacion" required>
          </div>
          
          <h3>CANVAS</h3>

          <div class="form-group">
            <label style="font-size: 20px;" for="propuestaValor">Propuesta de valor</label>
            <textarea class="form-control input-proyecto" name="propuestaValor" id="propuestaValor" rows="3" placeholder="aquí su propuesta.." required></textarea>
          </div>

          <div class="form-group">
            <label style="font-size: 20px;" for="canalesDistribucion">Canales de distribución</label>
            <textarea class="form-control input-proyecto" name="canalesDistribucion" id="canalesDistribucion" rows="3" placeholder="aquí el canal de distribución.." required></textarea>
          </div>
          <div class="form-group">
            <label style="font-size: 20px;" for="segmentoMercado">Segmento de mercado</label>
            <textarea class="form-control input-proyecto" name="segmentoMercado" id="segmentoMercado" rows="3" placeholder="aquí su Segmento de mercado...." required></textarea>
          </div>
          <div class="form-group">
            <label style="font-size: 20px;" for="recursosClave">Recursos claves</label>
            <textarea class="form-control input-proyecto" name="recursosClave" id="recursosClave" rows="3" placeholder="aquí sus Recursos claves......" required></textarea>
          </div>
          <div class="form-group">
            <label style="font-size: 20px;" for="sociosClave">Socios claves</label>
            <textarea class="form-control input-proyecto" name="sociosClave" id="sociosClave" rows="3" placeholder="aquí sus socios claves......." required></textarea>
          </div>


          
          
         
      
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!---------------------------------------------------------->





      <div style="padding:1em; margin-left: 6em;" class="content">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div  class="card-body card_01">
                <div style="padding:1em;" class="row">

                  <span>
                    <h3 style="text-align: center; font-size: 50px;">{{ auth()->user()->proyectoName}}<a href="#"  data-toggle="modal" data-target="#exampleModalLong"><i style="padding: 0.5em;" class="fa fa-pencil"></i></a> </h3>
              
              @foreach($users as $user)

                    <h4>CANVA</h4>
                    <h5>Propuesta de valor</h5>
                    <p>{{$user->propuestaValor}}</p>
                    <h5>Canales de distribución</h5>
                    <p>{{$user->canalesDistribucion}}</p>
                    <h5>Segmento de mercado</h5>
                    <p>{{$user->segmentoMercado}}</p>             
                    <h5>Recursos clave</h5>
                    <p>{{$user->recusosClave}}</p>
                    <h5>Socios clave</h5>
                    <p>{{$user->sociosClave}}</p>
                    <p></p>
                  </span>
                </div>
              </div>
      
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-lg-10 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-body card_01 ">
                  <span  >
                    <h4 class="cat">Integrantes <a href="#"><i style="padding: 0.5em;" class="fa fa-pencil"></i></a></h4>
                    <h6 class="cat2"><i class="nc-icon nc-single-02"></i>Sergio Eb Gallegos</h6>
                    <h6  class="cat2"><i class="nc-icon nc-single-02"></i>Ulises Lizama Solis</h6>
                    <h6  class="cat2"><i class="nc-icon nc-single-02"></i>Mauricio Poot Canul</h6>
                  </span>
                </div>

              </div>
            </div>

            <div class="col-lg-10 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-body card_01 ">
                  <span  >
                    <h4 class="cat">Categoria <a href="#"><i style="padding: 0.5em;" class="fa fa-pencil"></i></a></h4>
                    <h5 class="cat2">{{$user->categoria}}</h5>

                  </span>
                </div>

              </div>
            </div>
            <div class="col-lg-10 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-body card_01 ">
                  <span  >
                    <h4 class="cat">Problemática <a href="#"><i style="padding: 0.5em;" class="fa fa-pencil"></i></a></h4>
                    <h5 class="cat2">{{$user->problematica}}</h5>

                  </span>
                </div>

              </div>
            </div>
            <div class="col-lg-10 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-body card_01 ">
                  <span  >
                    <h4 class="cat">Innovación <a href="#"><i  style="padding: 0.5em;" class="fa fa-pencil"></i></a></h4>
                    <h5 class="cat2">{{$user->innovacion}}</h5>

                  </span>
                </div>

              </div>
            </div>

          </div>

        </div>
        @endforeach
                </div>

@endsection
