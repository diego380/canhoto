@extends('layouts.app_home')
@section('titulo','Cadastro de usuário')
@section('conteudo')
<div class="container">
	<div class="row">
		<div class="col m10 offset-m1 s12">
			<h4>Cadastro de novo usuário</h4>
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col m6 s12">
							<input id="name" type="text" class="validate">
							<label for="name">Nome</label>
						</div>
						<div class="input-field col m6 s12">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Sobrenome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col m12 s12">
							<input id="email" type="email" class="validate" required>
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col m6 s12">
							<input id="password" type="password" class="validate">
							<label for="name">Senha</label>
						</div>
						<div class="input-field col m6 s12">
							<input id="confir" type="text" class="validate">
							<label for="last_name">Confirme sua senha</label>
						</div>
					</div>
					<div class="row">
						<div class="col m12">
							<p class="right-align"><button class="btn waves-effect waves-light" type="button" name="action">cadastrar</button></p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection