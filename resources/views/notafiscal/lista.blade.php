@extends('layouts.app')
@section('titulo','Notas Fiscais')
@section('conteudo')



<!-- 
@forelse($itensNotaFiscal as $itemNotaFiscal)

	<h6>{{ $itemNotaFiscal['nomeProduto'] }}</h6>
@empty

	<h6>Nada</h6>

@endforelse
 -->
<p>Total de produtos: {{ $qtdItens }}</p>
<p>Data do pedido: {{ $dataPedido }}</p>
<p>Cidade: {{ $cidade }}</p>
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

		@endforelse
	</tbody>
</table>

@endsection