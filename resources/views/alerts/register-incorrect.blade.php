@if(Session::has('register-incorrect'))
	<div class="col-md-6 col-md-offset-3 alert alert-danger alert-dismissible" role="alert">
	  <b>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 {{Session::get('register-incorrect')}}</b>
	</div>
@endif