@if(Session::has('message-error'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Lo sentimos!</strong> {{ Session::get('message-error') }}
</div>
@endif