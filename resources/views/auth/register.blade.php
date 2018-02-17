@extends('layouts.app_home')
@section('titulo','Cadastro de usuário')
@section('conteudo')
<div class="container register_login">
	<div id="register-page" class="row">
		<div class="col s12 z-depth-6 card-panel">
			<div class="row">
				<div class="col m10 offset-m1 s12">
					<div class="row">
						<a class="right" href="{{ url('/') }}"><img id="register_logo" class="responsive-img" src="/img/logoMix.jpg"></a>
						<h4 class="left">Cadastro de novo usuário</h4>
					</div>
					<div class="row">
						<form class="col s12" method="post" action="{{ route('register') }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="input-field col m6 s12">
									<input id="name" type="text" name="name" class="validate">
									<label for="name">Nome</label>
								</div>
								<div class="input-field col m6 s12">
									<input id="last_name" type="text" class="validate">
									<label for="last_name">Sobrenome</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col m12 s12">
									<input id="email" type="email" name="email" class="validate" required>
									<label for="email">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col m6 s12">
									<input id="password" type="password" name="password" class="validate">
									<label for="name">Senha</label>
								</div>
								<div class="input-field col m6 s12">
									<input id="password-confirm" name="password_confirmation" type="password" class="validate">
									<label for="password-confirm">Confirme sua senha</label>
								</div>
							</div>
							<div class="row">
								<div class="col m12">
									<p class="right-align"><button type="submit" class="btn waves-effect waves-light" type="button" name="action">cadastrar</button></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection