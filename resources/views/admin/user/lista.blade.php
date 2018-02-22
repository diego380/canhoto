@extends('layouts.app')
@section('titulo','Painel de controle')
@section('conteudo')

<div class="container">
	<!-- <div class="row right">
		<h6><b>Pesquisar usuários:</b></h6>
		<form action="{{ url('admin/user/search') }}" method="get">
			<div class="input-field col s6">
				<input type="text" name="chave" placeholder="Ex.: João">
			</div>
			<div class="input-field col s4">
				<select name="categoria">
					<option>Selecione...</option>
					<option value="name">Nome</option>
					<option value="email">Email</option>
				</select>
			</div>
			<div class="input-field col s4">
				<button class="btn" type="submit">OK</button>
			</div>
		</form>
	</div> -->
	@if (Session::has('sucesso'))
	<div class="card-panel green"><strong class="center">{{ Session::get('sucesso') }}</strong></div>
	@endif
	<table class="striped">
		<thead>
			<tr>
				<th class="center-align">Nome</th>
				<th class="center-align">Email</th>
				<th class="center-align">Ações</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($users as $user)
			<tr>
				<td class="center-align">{{ $user->name }}</td>
				<td class="center-align">{{ $user->email }}</td>
				<td class="center-align">
					<a class="btn-flat tooltipped" href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Editar usuário?">
						<i class="material-icons black-text">mode_edit</i>
					</a>
					<a class="btn-flat tooltipped" href="{{ url('admin/users/'.$user->id.'/delete') }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Excluir usuário?">
						<i class="material-icons black-text">delete</i>
					</a>
				</td>
			</tr>
			@empty
			<tr><h5>Não existem usuário cadastrados</h5></tr>
			@endforelse
		</tbody>
	</table>
</div>

@endsection