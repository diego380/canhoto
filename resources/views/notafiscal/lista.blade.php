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
			<td><b>Data do pedido</b></td>
			<td><b>Qtd Produtos</b></td>
			<td><b>Data de emissão NF</b></td>
			<td><b>Chave de acesso</b></td>
		</th>
		<tr>
			<td></td>
			<td>{{ date("d/m/Y",strtotime($itensNotaFiscal[0]['dataPedido'])) }}</td>
			<td>{{ count($itensNotaFiscal) }}</td>
			<td>*dataEmissao*</td>
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
			@for($item = 0;$item < count($itensNotaFiscal); $item++)
			<tr>
				<td>{{ $itensNotaFiscal[$item]['codigoProduto'] }}</td>
				<td>{{ $itensNotaFiscal[$item]['nomeProduto'] }}</td>
				<td>{{ $itensNotaFiscal[$item]['quantidadeNotaFiscal'] }}</td>
				<td>{{ $itensNotaFiscal[$item]['nomeFornecedor'] }}</td>
			</tr>
			@endfor
		</tbody>
	</table>
</div>
<br>
<div class="center">
	@for($pagina = 0; $pagina < $numeroPaginacao; $pagina++)
		<a href="{{ url('notafiscal/alagoas/315625?pagina='.$pagina) }}" class="waves-effect waves-light btn">{{ $pagina }}</a>
	@endfor
</div>
<br>




@endsection