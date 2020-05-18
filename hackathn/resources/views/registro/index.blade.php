
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/TecNNM.png')}} "/>
	<link rel="icon" type="image/png" href="{{asset('img/logo-tecmotul22.png')}} " />
	<title>Hackathon - Registro</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="{{ asset('registroAssets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('registroAssets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />
	<link href="{{ asset('css/styles-hackathon-registro.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('registroAssets/css/demo.css')}}" rel="stylesheet" />

<script src="{{asset('/js/validar-password.js')}}" type="text/javascript"></script>




	</head>

	<body>

     
        <div class="image-container set-full-height" style="background-image: url('{{ asset('loginAsset/images/isc_bg2.jpg') }}">
           
             
            <!--   Big container   -->
            <div class="container">
                <div style="padding-top:0;" class="row">
                <div class="col-sm-8 col-sm-offset-2">
        
                    <!--      Wizard container        -->
                    <div style="padding:1em; " class="wizard-container">
        
                        <div class="card wizard-card " data-color="blue" id="wizardProfile">
                            <form  name="mi_formulario"  method="POST" action="{{ route('registro.store') }}"  enctype="multipart/form-data" onSubmit="return validar_clave()">
                        <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
                        @csrf
                                <div  class="wizard-header text-white">
                                    <h3>
                                       <b>REGISTRATE</b> AL HACKATHON <br>
                                       <small>Esta información nos servirá para...</small>
                                    </h3>
                                </div>
        
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">información básica</a></li>
                                        <li><a href="#account" data-toggle="tab">Rol</a></li>
                                        <li><a href="#address" data-toggle="tab">información adicional</a></li>
                                    </ul>
                                </div>
        
                                <div class="tab-content text-white">
                                    <div class="tab-pane" id="about">
                                      <div class="row">
                                          <h4 class="info-text"> Lo primero es registrar tu información básica :)</h4>
                                          <div class="col-sm-4 col-sm-offset-1">
                                             <div class="picture-container">
                                                  <div class="picture">
                                                      <img src="{{ asset('registroAssets/img/default-avatar.png')}}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                      <input name="avatar" type="file" id="wizard-picture" required>
                                                  </div>
                                                  <h6>Elige tu foto de perfil</h6>
                                              </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Nombre<small>(obligatorio)</small></label>
                                                <input name="name" type="text" class="input100" placeholder="Andrew...">
                                              </div>
                                              <div class="form-group">
                                                <label>Apellidos<small>(obligatorio)</small></label>
                                                <input name="lastName" type="text" class="input100" placeholder="Smith...">
                                              </div>
                                          </div>
                                          <div class="col-sm-10 col-sm-offset-1">
                                              <div class="form-group">
                                                  <label>Correo <small>(obligatorio)</small></label>
                                                  <input name="email" type="email" class="input100" placeholder="andrew@creative-tim.com">
                                              </div>
                                         <script>

                                        function soloNumeros(e)

                                            {

	                                            var key = window.Event ? e.which : e.keyCode

	                                            return ((key >= 48 && key <= 57) || (key==8))

                                            }
    
                                        </script>

                                              <div class="form-group">
                                                <label>Matricula <small>(obligatorio)</small></label>
                                                <input onKeyPress="return soloNumeros(event)"  name="matricula" type="numeric" class="input100" placeholder="160700.." maxlength="8" >
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> ¿Cual es tu rol en el equipo? </h4>
                                        <div class="row">
        
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-3">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Documentador">
                                                        <div class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </div>
                                                        <h6>Documentador</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Programador">
                                                        <div class="icon">
                                                            <i class="fa fa-code"></i>
                                                        </div>
                                                        <h6>Programador</h6>
                                                    </div>
        
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Investigador">
                                                        <div class="icon">
                                                            <i class="fa fa-search"></i>
                                                        </div>
                                                        <h6>Investigador</h6>
                                                    </div>
        
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Expositor">
                                                        <div class="icon">
                                                            <i class="fa fa-microphone"></i>                                                        </div>
                                                        <h6>Expositor</h6>
                                                    </div>
        
                                                </div>
                                                <div class="form-group">
                                                 <div class="col-sm-9">
                                                    <label>Nombre de Equipo</label>
                                                    <input name="equipoName" type="text" class="input100" placeholder="buena maravilla onda dinamita escuadrón lobo" required>
                                                  </div>
                                                  <div class="col-sm-3">
                                                    <label># equipo</label>
                                                    <input onKeyPress="return soloNumeros(event)"  name="equipoNumber" type="text" class="input100" placeholder="buena maravilla onda dinamita escuadrón lobo" maxlength="2" required>
                                                  </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Ultimos datos :) </h4>
                                            </div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                 <div class="form-group">
                                                    <label>Carrera</label>
                                                    <select name="carrera" class="input100">
                                                        <option value="Ingeniería en Sistemas">Ingeniería en Sistemas</option>
                                                        <option value="Ingeniería Industrial"> Ingeniería Industrial</option>
                                                        <option value="Ingeniería Electromecánica"> Ingeniería Electromecánica </option>
                                                        <option value="Ingeniería Renovables"> Ingeniería Renovables </option>
                                                        <option value="Ingeniería Electrónica"> Ingeniería Electrónica </option>
                                                    </select>
                                                  </div>
                                            </div>
                                            <div class="col-sm-3">
                                                 <div class="form-group">
                                                    <label>Semestre</label>
                                                    <select name="semestre" class="input1002">
                                                        <option value="1er Semestre">1er Semestre</option>
                                                        <option value="2do Semestre"> 2do Semestre</option>
                                                        <option value="3er Semestre"> 3er Semestre </option>
                                                        <option value="4to Semestre"> 4to Semestre </option>
                                                        <option value="5to Semestre"> 5to Semestre </option>
                                                        <option value="6to Semestre"> 6to Semestre </option>
                                                        <option value="7mo Semestre"> 7mo Semestre </option>
                                                        <option value="8vo Semestre"> 8vo Semestre </option>
                                                    </select>                                                  </div>
                                            </div>

                                        <!---------------------PASS ----------------->
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
   
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
   
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                         <!---------------------PASS ----------------->
                                            <div class="col-sm-5">
                                                <div class="form-group row">
                                                    <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-12">
                                                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                        <!---------------------PASS ----------------->
                                       

                                      <!--------------------- script confirmPASS----------------->

                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill button-hackathn' name='next' value='Siguiente' />
                                        <input type='submit' class='btn btn-finish btn-fill button-hackathn' name='finish' value='Finalizar' />
        
                                    </div>
        
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill button-hackathn' name='previous' value='Volver' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
        
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
                </div><!-- end row -->
            </div> <!--  big container -->
        
        </div>

        <script type="text/javascript">
            
            $(document).ready(function() {
      	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
    			if(index==2) {
    				// Make sure we entered the name
    				if(!$('#name').val()) {
    					alert('You must enter your name');
    					$('#name').focus();
    					return false;
    				}
    			}
     
    			// Set the name for the next tab
    			$('#tab3').html('Hello, ' + $('#name').val());
     
    		}, onTabShow: function(tab, navigation, index) {
    			var $total = navigation.find('li').length;
    			var $current = index+1;
    			var $percent = ($current/$total) * 100;
    			$('#rootwizard .progress-bar').css({width:$percent+'%'});
    		}});
    });
        </script>


</body>

	<!--   Core JS Files   -->
	<script src="{{asset('registroAssets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('registroAssets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('registroAssets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
	<script src="{{asset('registroAssets/js/gsdk-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('registroAssets/js/demo.js')}}" type="text/javascript"></script>
	<script src="{{asset('registroAssets/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{asset('registroAssets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>