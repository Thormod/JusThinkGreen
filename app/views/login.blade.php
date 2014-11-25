@extends('base')


@section('content')

<div class="main">
     <div class="container">
          <section class="hgroup">
               <h1>Registrar / Inicio de Sesión</h1>
               <ul class="breadcrumb pull-right">
                    <li><a href="{{ URL::to('/')}}">Inicio</a> </li>
                    <li class="active">Registrar / Inicio de Sesión</li>
               </ul>
          </section>
          <section>
               <div class="row">
                    <div class="col-sm-6 col-md-6">
                         <div class="signin">
                              <div class="social_sign">
                                   <h3>Inicia Sesión con Redes Sociales</h3>
                                   <a class="fb" href="{{ URL::to('loginWithFacebook') }}"><i class="fa fa-facebook"></i></a> <a class="tw" href="#twitter"><i class="fa fa-twitter"></i></a> 
                                   <a class="gp" href="{{ URL::to('loginWithGoogle') }}"><i class="fa fa-google-plus"></i></a> </div>
                              <div class="or">
                                   <div class="or_l"></div>
                                   <span>ó</span>
                                   <div class="or_r"></div>
                              </div>
                             
                              <p class="sign_title"> Inicia Sesión con tu cuenta.</p>
                              <div class="row">
                                   <div class="col-lg-2"></div>
                                   <div class="form col-lg-8">
                                        

                                          {{ Form::open(array('url' => 'login')) }}
                                          <div class="form-group">
                                          {{ Form::text('email', Input::old('email'), array('placeholder'=>'E-mail','required'=>'true','class' => 'form-control')) }}
                                          </div>
                                          <div class="form-group">
                                              {{ Form::password('password', array('placeholder'=>'Contraseña','required'=>'true', 'class' => 'form-control')) }}
                                          </div>

                                          {{ Form::submit('Entrar', array('class' => 'btn smooth-scroll')) }}
                                          {{ Form::close() }}  

                                             <div class="forgot">
                                                  <a href="#">Forgot password?</a> </div>
                                        
                                   </div>
                                   <div class="col-lg-2"></div>
                              </div>
                         </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                         <div class="signup">
                              <div class="social_sign">
                                   <h3>Regístrate con Redes Sociales</h3>
                                   <a class="fb" href="{{ URL::to('signUpWithFacebook') }}"><i class="fa fa-facebook"></i></a> <a class="tw" href="#twitter"><i class="fa fa-twitter"></i></a>
                                   <a class="gp" href="{{ URL::to('signUpWithGoogle') }}"><i class="fa fa-google-plus"></i></a> </div>
                              <div class="or">
                                   <div class="or_l"></div>
                                   <span>ó</span>
                                   <div class="or_r"></div>
                              </div>
                             
                              <p class="sign_title"> Inicia Sesión con tu cuenta.</p>
                               <div class="row">
                                   <div class="col-lg-2"></div>
                                   <div class="form col-lg-8">
                                      
                                        @include('layouts.notifications')
                                        
                                        {{ Form::open(array('url' => 'registrar')) }}
                                        <div class="form-group">
                                        {{ Form::label('username', 'Username') }}
                                        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                        {{ Form::label('email', 'Correo electrónico') }}
                                        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                        {{ Form::label('password', 'Contraseña') }}
                                        {{ Form::password('password', array('class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group" >
                                        {{ Form::label('password_confirmation', 'Verificar contraseña') }}
                                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                                        </div>
                                        {{ Form::submit('Registrar', array('class' => 'btn smooth-scroll')) }}
                                        {{ Form::close() }}
                                      
                                      
                                   </div>
                                   <div class="col-lg-2"></div>
                              </div>
                    </div>
               </div>
          </section>
     </div>
  </div>

@stop