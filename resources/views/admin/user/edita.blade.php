@extends('layouts.app')
@section('titulo',$user->name)
@section('conteudo')
<div id="login-page" class="row register_login">
	<div class="container">
		<div class="col s12">
			@include('admin.user.form_edita')
		</div>
	</div>
</div>
@endsection