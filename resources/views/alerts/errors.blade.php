@if(Session::has('message-error'))

<div id="card-alert" class="card red">
  <div class="card-content white-text">
    <p>{{Session::get('message-error')}}</p>
  </div>
	
  </div>
@endif
