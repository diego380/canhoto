@extends('layouts.app')
@section('titulo','Notas Fiscais')
@section('conteudo')


<table class="bordered">
	<th>
		<td><b>Razão</b></td>
		<td><b>CNPJ</b></td>
		<td><b>Data do pedido</b></td>
		<td><b>Qtd Produtos</b></td>
		<td><b>Data de emissão NF</b></td>
	</th>
	<tr>
		<td></td>
		<td>{{ $itensNotaFiscal[0]['nomeCliente'] }}</td>
		<td>*cnpj*</td>
		<td>{{ date("d/m/Y",strtotime($itensNotaFiscal[0]['dataPedido'])) }}</td>
		<td>{{ count($itensNotaFiscal) }}</td>
		<td>*dataEmissao*</td>
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
		@forelse($itensNotaFiscal as $itemNotaFiscal)
		<tr>
			<td>{{ $itemNotaFiscal['codigoProduto'] }}</td>
			<td>{{ $itemNotaFiscal['nomeProduto'] }}</td>
			<td>{{ $itemNotaFiscal['quantidadeNotaFiscal'] }}</td>
			<td>{{ $itemNotaFiscal['nomeFornecedor'] }}</td>
		</tr>
		@empty
		<tr>
			<td>Está nota fiscal não possui nenhum produto!</td>
		</tr>
		@endforelse
	</tbody>
</table>

@endsection