@extends('layouts.register')

@section('content')

<div style="margin-top:5%;"class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div style=" background:rgba(2, 35, 54, 0.863);" class="card">
                <div class="card-header"><p style="color:#ffffff; font-size:20px;">Ingrese correctamente sus datos!!</p></div>

                <div style="padding:1%; height:90%;" class="card-body">
                    <form method="POST" action="{{ route('registro.store') }}"  enctype="multipart/form-data">
                        @csrf

                             <!---Row -->
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              <div  class="form-group row">


                                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                                  <div class="col-md-12">
                                      
                                      <input id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                      @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
                            </div>

                            <div class="col-sm">
                                                      <div class="form-group row">
                                                          <label for="lastName" class="col-md-6 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                                          <div class="col-md-12">
                                                              <input id="lastName" type="text" class="input100 form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                                              @error('lastName')
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                                  </span>
                                                              @enderror
                                                          </div>
                                                      </div>
                            </div>

                            <div class="col-sm">
                              <div class="form-group row">
                                  <label for="rol" class="col-md-6 col-form-label text-md-right">{{ __('Rol de equipo') }}</label>

                                  <div class="col-md-12">
                                    <select id="rol" name="rol" class=" input100 form-control" >
                                      <option>Programador</option>
                                      <option>Documentador</option>
                                      <option>Arquitecto de hardware</option>
                                      <option>Expositor</option>


                                    </select>

                                      @error('rol')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
                            </div>

                          </div>
                        </div>

                                              <!--finRow-->
                                              <!---Row -->
                                         <div class="container">
                                           <div class="row">
                                             <div class="col-sm">
                                               <div class="form-group row">


                                                   <label for="carrera" class="col-md-3 col-form-label text-md-right">{{ __('carrera') }}</label>

                                                   <div class="col-md-12">
                                                     <select id="carrera" name="carrera" class=" input100 form-control" id="sel1">
                                                       <option>Ingeniería en Sistemas</option>
                                                       <option>Ingeniería Industrial</option>
                                                       <option>Ingeniería Electromecánica</option>
                                                       <option>Ingeniería Renovables</option>
                                                       <option>Ingeniería Electrónica</option>

                                                     </select>
                                                       @error('carrera')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                   </div>
                                               </div>
                                             </div>

                                             <div class="col-sm">

<!--------------------------------->

                                                     <div class="form-group row">
                                                         <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Semestre') }}</label>

                                                         <div class="col-md-12">
                                                           <select id="semestre" name="semestre" class="input100 form-control" id="sel1">
                                                             <option>1er semestre</option>
                                                             <option>2do semestre</option>
                                                             <option>3er semestre</option>
                                                             <option>4to semestre</option>
                                                             <option>5to semestre</option>
                                                             <option>6to semestre</option>
                                                             <option>7mo semestre</option>
                                                             <option>8vo semestre</option>
                                                           </select>

                                                             @error('lastName')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $message }}</strong>
                                                                 </span>
                                                             @enderror
                                                         </div>
                                                     </div>



                                                  </div>
                                                  <div class="col-sm">
                                                    <div class="form-group row">


                                                        <label for="Matricula" class="col-md-4 col-form-label text-md-right">{{ __('Matricula') }}</label>

                                                        <div class="col-md-12">
                                                            <input id="matricula" type="text" class=" input100 form-control @error('Matricula') is-invalid @enderror" name="matricula" value="{{ old('Matricula') }}" required autocomplete="Matricula" maxlength="8" autofocus>

                                                            @error('Matricula')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                  </div>

                                                </div>



                                             </div>

                                             <!---Row -->
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-sm">
                                              <div class="form-group row">
                                                  <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                                                  <div class="col-md-12">
                                                      <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                      @error('email')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                            </div>


                                                 <div class="col-sm">
                                                    <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group row">


                                                            <label for="equipoNumber" class="col-md-10 col-form-label text-md-left">{{ __('# de equipo') }}</label>
     
                                                            <div class="col-md-12">
                                                                <input id="equipoNumber"  type="number" class="input100 form-control @error('equipoNumber') is-invalid @enderror" name="equipoNumber" value="{{ old('equipoNumber') }}" required autocomplete="equipoNumber" maxlength="2" autofocus>
     
                                                                @error('equipoNumber')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm">
                                                        <div class="form-group row">


                                                            <label for="equipoName" class="col-md-9 col-form-label text-md-left">{{ __('Nombre de equipo') }}</label>
     
                                                            <div class="col-md-12">
                                                                <input id="equipoName" type="text" class="input100 form-control @error('equipoName') is-invalid @enderror" name="equipoName" value="{{ old('equipoName') }}" required autocomplete="equipoName" maxlength="8" autofocus>
     
                                                                @error('equipoName')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </div>




                                              
                                                 </div>

                                               </div>



                                            </div>
                                            <!---Row -->
                                       <div class="container">
                                         <div class="row">
                                           <div class="col-sm">
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


                                                <div class="col-sm">
                                                  <div class="form-group row">
                                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                      <div class="col-md-12">
                                                          <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">
                                                      </div>
                                                  </div>
                                                </div>

                                              </div>



                                           </div>
                                             <!---Row -->
                                       <div class="container">
                                        <div class="row">
                                          <div class="col-sm">
                                          
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-12">
                                                    <input name="avatar" type="file"  id="avatar" >
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                           
                                          </div>


                                           



                                          </div>




                                         </div>

                                                               <!--finRow-->






                        <div class="form-group row mb-6">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
