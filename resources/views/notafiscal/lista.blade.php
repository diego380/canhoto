@extends('layouts.app')
@section('titulo','Notas Fiscais')
@section('conteudo')

<div class="row">
	<table class="bordered">
		<th>
			<td><b>Razão</b></td>
			<td><b>CNPJ</b></td>
		</th>
		<tr>
			<td></td>
			<td>{{ $itensNotaFiscal[0]['nomeCliente'] }}</td>
			<td>*cnpj*</td>
		</tr>
	</table>
	<br>
	<table class="bordered">
		<th>
			<td><b>Qtd Produtos</b></td>
			<td><b>Data de emissão NF</b></td>
			<td><b>Chave de acesso</b></td>
			<td><b>Canhoto</b></td>
		</th>
		<tr>
			<td></td>
			<td>{{ $totalItens }}</td>
			<td>{{ date("d/m/Y",strtotime($itensNotaFiscal[0]['dataPedido'])) }}</td>
			<td>*chavedeacesso*</td>
			<td>
				@if(!isset($arquivo))
				<a href="#modalAnexarCanhoto" class="modal-trigger tooltipped" data-position="bottom" data-tooltip="Adicione o canhoto da nota {{ $itensNotaFiscal[0]['numeroNotaFiscal'] }}">
					<i class="small material-icons orange-text text-darken-2">add_box</i>
				</a>
				@else
				<a href="#modalAnexarCanhoto" class="modal-trigger tooltipped" data-position="bottom" data-tooltip="Visualize o canhoto da nota {{ $itensNotaFiscal[0]['numeroNotaFiscal'] }}">
					<i class="small material-icons orange-text text-darken-2">image</i>
				</a>
				@endif
			</td>
		</tr>
	</table>
	
	<div id="modalAnexarCanhoto" class="modal">
		<div class="modal-content">
			@if(!isset($arquivo))
			<form action="{{ route('notafiscal.canhoto.salva') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="user_id" value="{{ Auth::id() }}">
				<input type="hidden" name="numeroNota" value="{{ $itensNotaFiscal[0]['numeroNotaFiscal'] }}">
				<input type="hidden" name="estado" value="{{ app('request')->input('estado') }}">
				<div class="row">
					<h5>Canhoto da NF: <b>{{ $itensNotaFiscal[0]['numeroNotaFiscal'] }}</b></h5>
				</div>
				<div class="row">
					<div class="file-field input-field">
						<div class="btn">
							<span class="truncate">Arquivo</span>
							<input type="file" name="arquivo">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Adicione o canhoto referente a NF {{ $itensNotaFiscal[0]['numeroNotaFiscal'] }}">
						</div>
					</div>
				</div>
				<div class="row">
					<button type="submit" class="btn right orange darken-2">Salvar</button>
				</div>
			</form>
			@else
			<div class="row">
				<h5>Canhoto da nota: <b>{{ $itensNotaFiscal[0]['numeroNotaFiscal'] }}</b></h5>
			</div>
			<div class="row">
				<div class="center">
					@if($arquivo['extensao']=="pdf")
					<a href="{{ $arquivo['path'] }}">
						<img id="icon_pdf" src="/img/pdf_icon.png" class="center responsive-img">
					</a>
					@else
					<img class="materialboxed center" width="650" src="{{ $arquivo['path'] }}">
					@endif
				</div>
			</div>
			<div class="row">
				<a href="{{ $arquivo['path'] }}" title="">
					<button type="link" class="btn right orange darken-2">Baixar canhoto</button>
				</a>
			</div>
			@endif
		</div>
	</div>
	<br><br>
	<table class="bordered">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Quantidade</th>
				<th>Fornecedor</th>
			</tr>
		</thead>
		<tbody>
			@foreach($itensNotaFiscal as $itemNotaFiscal)
			<tr>
				<td>{{ $itemNotaFiscal['codigoProduto'] }}</td>
				<td>{{ $itemNotaFiscal['nomeProduto'] }}</td>
				<td>{{ $itemNotaFiscal['quantidadeNotaFiscal'] }}</td>
				<td>{{ $itemNotaFiscal['nomeFornecedor'] }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<br>
@if($totalPaginas>1)
<div class="row">
	<div class="center">
		@for($paginacao=1;$paginacao<=$totalPaginas;$paginacao++)
		<a href="{{ url('notafiscal?numeroNota='.$itensNotaFiscal[0]['numeroNotaFiscal'].'&estado='.$estado.'&pagina='.$paginacao) }}" class="btn {{  (app('request')->input('pagina') == $paginacao)?'deep-orange lighten-2':''}}">
			{{ $paginacao }}
		</a>
		@endfor
	</div>
</div>
<br>
@endif
@endsection