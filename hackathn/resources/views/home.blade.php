@extends('layouts.app')
@section('title','Inicio')
@section('content')

<div style="padding:1em;" class="content">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div  class="card-body card_01">
              <div style="padding:1em;" class="row">

                <span>
                  <h3>hola {{ auth()->user()->rol }} bienvenido a Hackathon 2019</h3>
                  <h5>36 horas por el desarrollo sostenible</h5>
                  <blockquote>La sostenibilidad es el desarrollo que satisface las necesidades del presente sin comprometer la capacidad de las futuras generaciones, garantizando el equilibrio entre el crecimiento económico, el cuidado del medio ambiente y el bienestar social. <a href="https://www.acciona.com/es/desarrollo-sostenible/" target="_blank"><i class="material-icons">link</i></a>.</blockquote>
                  <p>En su tercera edición, el hackathón del ITS Motul se enfoca en el tema de el desarrollo sostenible, <strong>sin limitarse a un área concreta</strong>.</p>
                  <p>Nos interesan tus propuestas para resolver problemáticas, realizar tareas o eliminar molestias del día a día, en cualquier aspecto y en cualquier nivel de impacto.</p>
                  <p>En toda idea puede nacer un proyecto, no te limites, se creativo y da lo mejor de ti en nuestro hackathón!!!</p>
                  <p></p>
                </span>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body card_01 ">
              <span  >
                <h4>Programa del hackathón</h4>
                <h5>salones 4, 5 y auditorio del edificio M</h5>
      <h6>
      28 de noviembre, 9:00 am -
      29 de noviembre, 15 pm</h6>
                  <ul>28 de noviembre
                    <li>09-10 hrs Inaguración del evento</li>
                    <li>10-16 hrs Formalización de la propuesta. elaboración del CANVA.</li>
                    <li>16-20 hrs Diseño del prototipo hardware/software</li>
                    <li><strong>20-22 hrs Cena en grupo :)</strong></li>
                    <li>22:30 hrs (hasta morir >:v) Refinamiento de prototipos</li>
                  </ul>
                  <ul>29 de noviembre
                    <li>07-10 hrs Preparar Pitch</li>
                    <li>10:30 hrs Entrega de presentaciones al comité</li>
                    <li>11-13 hrs Exposiciones ante jurado</li>
                    <li>13:14 hrs Defensa de equipos seleccionados</li>
                    <li>14-15 hrs Premiación y clausura</li>
                  </ul>
              </span>
            </div>

          </div>
        </div>

      </div>

@endsection
