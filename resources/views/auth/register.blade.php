@extends('layouts.app_home')
@section('titulo','Cadastro de usuário')
@section('conteudo')
<div id="login-page" class="row register_login">
	<div class="col s12 z-depth-6 card-panel">
		@include('auth.form_register')
	</div>
</div>
@endsection