@extends('layouts.inicio')
	@section('content')
		{!!Form::open()!!}
		<br>
				<div class="span3">.</div>
				<div class="span7">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Registro de Usuarios</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols" >
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
										<h2 align="left">Informacion General </h2><hr>

										    <div class="control-group">											
											<label class="control-label" for="radiobtns"><b>Carnet de Identidad: </b></label>
											
                                            <div class="controls">
                                               <div class="input-append">
                                                  <input class="span5 m-wrap" id="appendedInputButton" type="text">
                                                  <button class="btn btn-primary" type="button">Verificar!</button>
                                                </div>
                                              </div>	<!-- /controls -->			
										</div>
										
										
										<div class="control-group">											
											<label class="control-label" for="firstname"><b>Nombre: </b></label>
											<div class="controls">
												<input type="text" class="span5" id="firstname" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname"><b>Apellido:</b></label>
											<div class="controls">
												<input type="text" class="span5" id="lastname" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">
								            <label class="control-label" for="fechanac"><b>Fecha Nacimiento:</b></label>
								            <input type="date" value="" required="" class="span5" id="fechanac" name="fechanac">
								        </div>
								        <div class="control-group">
								            <label class="control-label" for="generp"><b>Genero:</b></label>
								            <select class="span5" name="genero" required="">
								                <option value="1">Masculino</option>
								                <option value="2">Femenino</option>

								            </select>
								        </div>
										
										<div class="control-group">											
											<label class="control-label" for="celular"><b>Celular: </b></label>
											<div class="controls">
												<input type="text" class="span5" id="celular" name="celular" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="celular"><b>Link a perfil de facebook: </b></label>
											<div class="controls">
												<input type="text" class="span5" id="facebook" name="facebook" value="">
											</div> <!-- /controls -->				
										</div><br>
											<h2 align="left">Informacion de la cuenta</h2><hr>
										<div class="control-group">											
											<label class="control-label" for="celular"><b>Email: </b></label>
											<div class="controls">
												<input type="text" class="span5" id="email" name="email" value="">
											</div> <!-- /controls -->				
										</div>
										<div class="control-group">	
											<label class="control-label" for="password1">Contraseña</label>
											<div class="controls">
												<input type="password" class="span5" id="password1" value="">
											</div>				
										</div> <!-- /control-group -->
										<div class="form-actions" align="center">
											<button type="submit" class="btn btn-primary">Registrar</button> 
											<button class="btn">Cancelar</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
															
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div>
		{!!Form::close()!!}
	@endsection

		@section('scripts')
		{!!Html::script('js/jquery.backstretch.min.js')!!}
		{!!Html::script('js/scripts2.js')!!}  
		@endsection 