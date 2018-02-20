<form class="col s12" method="post" action="{{ route('register') }}">
	{{ csrf_field() }}
	<div class="row">
		<div class="input-field col s12 center">
			<img src="/img/logo2.png" id="login_logo" alt="" class="responsive-img valign profile-image-login">
			<!-- <p class="center login-form-text">W3lessons - Material Design Login Form</p> -->
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 center">
			<h5 class="left login-form-text"><b>Novo usuário:</b></h5>
		</div>
	</div>
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
		<div class="col m6">
			<p class="left-align">
				<a href="{{ url('/') }}" class="btn tooltipped deep-orange lighten-2" data-position="top" data-delay="50" data-tooltip="Voltar para a página inicial">VOLTAR</a>
			</p>
		</div>
		<div class="col m6">
			<p class="right-align">
				<button type="submit" class="btn waves-effect waves-light" type="button" name="action">cadastrar</button>
			</p>
		</div>
	</div>
</form>