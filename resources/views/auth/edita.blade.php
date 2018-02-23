@extends('layouts.app')
@section('titulo',$user->name)
@section('conteudo')
<div id="login-page" class="row">
	<div class="container">
		<div class="col s12">
			@include('auth.form_edita')
		</div>
	</div>
</div>
@endsection