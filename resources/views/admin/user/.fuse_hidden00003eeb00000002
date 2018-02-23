@extends('layouts.app')
@section('titulo','Painel de controle')
@section('conteudo')

<table class="bordered highlight">
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
			<td class="center-align">{{ $user->name }} {{ $user->last_name }}</td>
			<td class="center-align">{{ $user->email }}</td>
			<td class="center-align">
				<a class="btn-flat tooltipped" href="{{ route('auth.users.edita',['id'=>$user->id]) }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Editar usuário?">
					<i class="material-icons black-text">mode_edit</i>
				</a>
				<a class="btn-flat tooltipped" href="{{ route('admin.users.apaga',['id'=>$user->id]) }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Excluir usuário?">
					<i class="material-icons black-text">delete</i>
				</a>
			</td>
		</tr>
		@empty
		<tr><h5>Não existem usuário cadastrados</h5></tr>
		@endforelse
	</tbody>
</table>


@endsection