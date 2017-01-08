@if(Session::has('register-correct'))
	<div class="col-md-6 col-md-offset-3 alert alert-success alert-dismissible" role="alert">
	  <b>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 {{Session::get('register-correct')}}</b>
	</div>
@endif