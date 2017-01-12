@extends('layouts.login')
  @section('content')

  <div class="section">
    <div class="row">
      <div class="col s12 card-panel">
        <h1 align="center"><strong>BIENVENIDO</strong></h1>
      {!!Form::open(['route' => 'login.store', 'method' => 'POST'])!!}
          <div class="row">
            <div class="input-field col s12 center">
              <img src="img/logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
                <p class="center login-form-text">Registro de Fieles</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix"></i>
              <input id="email" name="email" type="text">
              <label for="email" class="center-align">Correo: </label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" name="password" type="password">
              <label for="password">Contraseña:</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12  login-text">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me">Recordar</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn waves-effect waves-light col s12">Entrar!</button>
            </div>

                <!--<br><br><br><p>	Ingrese a su cuenta o registrese para emitir sus certificados de sacramentos.</p>-->

          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
                <p><a class="btn waves-effect waves-light light-blue darken-4" href="{!!URL::to('login/create')!!}">Registrate Ahora</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p><a class="btn waves-effect waves-light light-blue darken-4">Recuperar Cuenta</a></p>
            </div>
          </div>
      {!!Form::close()!!}
      </div>
    </div>
  </div>

  @endsection
