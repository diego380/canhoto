@extends('layouts.app_home')
@section('titulo','Home')
@section('conteudo')

<div id="login-page" class="row register_login">
	<div class="col s12 z-depth-6 card-panel">
		@include('auth.form_login')
	</div>
</div>
@endsection