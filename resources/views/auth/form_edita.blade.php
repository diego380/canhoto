<form class="col s12" method="post" action="{{ route('auth.users.atualiza',['id'=>$user->id]) }}">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<div class="row">
		<div class="input-field col s12 center">
			<h5 class="left login-form-text"><b>Editar:</b> {{ $user->name }}</h5>
		</div>
	</div>
	@if(Auth::user()->admin == 1)
	<div class="row">
		<div class="col m6 s12">
			<h6>Permissão:</h6>
			<input class="with-gap" name="admin" type="radio" id="admin_permissao" value="1" {{ $user->admin==1 ? 'checked':'' }}/>
			<label for="admin_permissao">Administrador</label>
			<input class="with-gap" name="admin" type="radio" id="usuario_permissao" value="0" {{ $user->admin==0 ? 'checked':'' }}/>
			<label for="usuario_permissao">Usuário</label>
		</div>	
	</div>
	@endif
	<div class="row">
		<div class="input-field col m6 s12">
			<input id="name" type="text" value="{{ $user->name }}" name="name" class="validate" required>
			<label for="name">Nome</label>
		</div>
		<div class="input-field col m6 s12">
			<input id="last_name" value="{{ $user->last_name }}" name="last_name" type="text" class="validate" required>
			<label for="last_name">Sobrenome</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col m12 s12">
			<input id="email" type="email" value="{{ $user->email }}" name="email" class="validate" required>
			<label for="email">Email</label>
		</div>
	</div>
	<div class="row">
		<div class="col m6">
			<p class="left-align">
				<a href="{{ URL::previous() }}" class="btn tooltipped deep-orange lighten-2" data-position="top" data-delay="50" data-tooltip="Voltar para o painel de controle">VOLTAR</a>
			</p>
		</div>
		<div class="col m6">
			<p class="right-align">
				<button type="submit" class="btn waves-effect waves-light" type="button">atualizar</button>
			</p>
		</div>
	</div>
</form>