@extends('layouts.login')
	@section('content')
	<div class="section">


		<div class="col s10">
		              <!-- Form with validation -->
		        <div class="col s12 m12 l6">
		          <div class="card-panel">
		            <h4 align="center"><b>Ingreso de Fieles </b></h4>
								<h6>Ingrese todos los datos correctamente para crear una cuenta</h6><hr>
		            <div class="row">
										{!!Form::open(['url'=>'usuario','method'=>'post'])!!}
											{{ csrf_field()}}<br>
											<h6 class="left"><b>Informacion General: </b></h6>

											@include('alerts.register-incorrect')
											<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
											<input type="hidden" name="tipo" value="0" id="tipo">
														<div class="row">
															<div class="input-field col s12">
																<i class="mdi-action-account-circle prefix"></i>
																<input id="ci" name="ci" type="number" class="validate" value="{{ old('name') }}">
																<label for="ci" class="">Carnet de Identidad: </label>
															</div>
														</div>
			                      <div class="row">
			                        <div class="input-field col s12">
			                          <i class="mdi-action-account-circle prefix"></i>
			                          <input id="nombre" type="text" name="nombre" class="validate">
			                          <label for="nombre" class="">Nombre: </label>
			                        </div>
			                      </div>
														<div class="row">
			                        <div class="input-field col s12">
			                          <i class="mdi-action-account-circle prefix"></i>
			                          <input id="apellido" type="text" name="apellido" class="validate">
			                          <label for="apellido" class="">Apellido: </label>
			                        </div>
			                      </div>
														<div class="row">
															<div class="input-field col s1">
																  <i class="mdi-action-account-circle prefix"></i>
															</div>
															<div class="input-field col s11">
			                          <input placeholder="01/01/2015" id="fechanac" name="fechanac" type="text" class="">
			                          <label for="fechanac">Fecha Nacimiento: </label>
			                        </div>
														</div>
														<div class="row">
															<div class="input-field col s1">
																  <i class="mdi-action-account-circle prefix"></i>
															</div>
				                      <div class="input-field col s11">
				                        <select>
				                          <option value="" name="genero" disabled selected>  Seleccione un genero</option>
				                          <option value="1">Masculino</option>
				                          <option value="2">Femenino</option>
				                        </select>
				                        <label>Genero</label>
				                    	</div>
														</div>
														<div class="row">
															<div class="input-field col s12">
																<i class="mdi-action-account-circle prefix"></i>
																<input id="celular" type="text" name="celular" class="validate">
																<label for="celular" class="">Celular</label>
															</div>
														</div>
														<div class="row">
															<div class="input-field col s12">
																<i class="mdi-action-account-circle prefix"></i>
																<input id="facebook" type="text" name="facebook" class="validate">
																<label for="facebook" class="">Link de Facebook: </label>
															</div>
														</div>
														<h6 class="header2"><b>Informacion de la cuenta: </b></h6>
			                      <div class="row">
			                        <div class="input-field col s12">
			                          <i class="mdi-communication-email prefix"></i>
			                          <input id="email" type="email" class="validate">
			                          <label for="email">Email</label>
			                        </div>
			                      </div>
			                      <div class="row">
			                        <div class="input-field col s12">
			                          <i class="mdi-action-lock-outline prefix"></i>
			                          <input id="password" type="password" class="validate">
			                          <label for="password">Password</label>
			                        </div>
			                      </div>

													{!!Form::submit('Registrar', ['class'=>'btn cyan waves-effect waves-light orange'])!!}
													{!!Form::close()!!}

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
			@endsection




		@section('scripts')
		{!!Html::script('js/demo/js/plugins/formatter/jquery.formatter.min.js')!!}
		{!!Html::script('js/scripts2.js')!!}
		@endsection
