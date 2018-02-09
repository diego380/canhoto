@extends('layouts.app')
@section('titulo','Pagina Inicial')
@section('conteudo')


<div class="row">
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content">
				
			</div>
			<div class="card-action light-green lighten-3">
				<a href="#" class="black-text"><b>This is a link</b></a>
			</div>
		</div>
	</div>
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content">
				
			</div>
			<div class="card-action light-green lighten-3">
				<a href="#" class="black-text"><b>This is a link</b></a>
			</div>
		</div>
	</div>
	<div class="col s12 m4">
		<div class="card white">
			<div class="card-content">
				
			</div>
			<div class="card-action light-green lighten-3">
				<a href="#" class="black-text"><b>This is a link</b></a>
			</div>
		</div>
	</div>
	
</div>
	
<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large pink waves-effect waves-light">
		<i class="large material-icons">add</i>
	</a>

	<ul>
		<li>
			<a class="btn-floating red"><i class="material-icons">note_add</i></a>
			<a href="" class="btn-floating fab-tip">Add a note</a>
		</li>

		<li>
			<a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
			<a href="" class="btn-floating fab-tip">Add a photo</a>
		</li>

		<li>
			<a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
			<a href="" class="btn-floating fab-tip">Add an alarm</a>
		</li>

		<li>
			<a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
			<a href="" class="btn-floating fab-tip">Add a master password</a>
		</li>
	</ul>
</div>

@endsection