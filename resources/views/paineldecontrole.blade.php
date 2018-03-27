@extends('layouts.app')
@section('titulo','Gerenciamento de usuário')
@section('conteudo')
<div class="row">
	@if(Auth::user()->admin == 1)
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content center">
				<a href="{{ route('admin.users.lista') }}" title="" class="grey-text">
					<i class="large material-icons">account_box</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="{{ route('admin.users.lista') }}" class="white-text"><b>Usuários</b></a>
			</div>
		</div>
	</div>
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content center">
				<a href="#" title="" class="grey-text">
					<i class="large material-icons">indeterminate_check_box</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="#" class="white-text"><b>Canhotos</b></a>
			</div>
		</div>
	</div>
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content center">
				<a href="#modalNotafiscal" title="" class="grey-text modal-trigger">
					<i class="large material-icons">find_in_page</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="#modalNotafiscal" class="white-text modal-trigger"><b>Nota Fiscais</b></a>
			</div>
		</div>
	</div>
	@else
	<div class="col s12 m6">
		<div class="card white">
			<div class="card-content center">
				<a href="#" title="" class="grey-text">
					<i class="large material-icons">indeterminate_check_box</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="#" class="white-text"><b>Canhotos</b></a>
			</div>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="card white">
			<div class="card-content center">
				<a href="#modalNotafiscal" title="" class="grey-text modal-trigger">
					<i class="large material-icons">find_in_page</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="#modalNotafiscal" class="white-text modal-trigger"><b>Nota Fiscais</b></a>
			</div>
		</div>
	</div>
	@endif
</div>
<div id="botao_adcionar" class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large pink waves-effect waves-light">
		<i class="large material-icons">add</i>
	</a>
	<ul>
		<li>
			<a class="btn-floating red"><i class="material-icons">note_add</i></a>
			<a href="" class="btn-floating fab-tip">Adicionar canhoto</a>
		</li>
	</ul>
</div>

<div id="modalNotafiscal" class="modal">
	<div class="modal-content">
		<div class="row">
			<form class="col s12" action="{{ route('notafiscal') }}" method="get" id="buscaNotaFiscal">
				<div class="row">
					<div class="input-field col s12">
						<select name="estado">
							<option value="" disabled selected>Escolha um estado</option>
							<option value="alagoas">Alagoas</option>
							<option value="sergipe">Sergipe</option>
							<option value="pernambuco">Pernambuco</option>
						</select>
						<label>Estado</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="numeroNota" type="text" class="validate" required="" aria-required="true">
						<label>Numéro da NF</label>
					</div>
				</div>
				<div class="row">
					<button type="submit" class="btn right">Pesquisar</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection