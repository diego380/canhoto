@extends('layouts.app')
@section('titulo','Notas Fiscais')
@section('conteudo')

<div>
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
		</th>
		<tr>
			<td></td>
			<td>{{ $totalItens }}</td>
			<td>{{ date("d/m/Y",strtotime($itensNotaFiscal[0]['dataPedido'])) }}</td>
			<td>*chavedeacesso*</td>
		</tr>
	</table>
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
<div class="center">
	@for($paginacao=1;$paginacao<=$totalPaginas;$paginacao++)
	<a href="{{ url('notafiscal?numeroNota='.$itensNotaFiscal[0]['numeroNotaFiscal'].'&estado='.$estado.'&pagina='.$paginacao) }}" class="btn">
		{{ $paginacao }}
	</a>
	@endfor
</div>
<br>
@endif
@endsection