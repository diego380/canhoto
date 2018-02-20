@extends('layouts.app')
@section('titulo','Painel de controle')
@section('conteudo')
<div class="row">
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content center">
				<a href="#" title="" class="grey-text">
					<i class="large material-icons">account_box</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="#" class="white-text"><b>Usuários</b></a>
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
				<a href="#" title="" class="grey-text">
					<i class="large material-icons">find_in_page</i>
				</a>
			</div>
			<div class="card-action grey center">
				<a href="#" class="white-text"><b>Nota Fiscais</b></a>
			</div>
		</div>
	</div>
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

@endsection