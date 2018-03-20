<?php

namespace App\Http\Controllers\NotaFiscal;

use App\Http\Controllers\Controller;
use App\Model\NotaFiscal\NotaFiscal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//TO DO: adicionar CNPJ e data de emissao no json

class NotaFiscalController extends Controller
{
    public function listaItensPorNotaFiscal($estado,$numeroNota)
    {
    	$url = file_get_contents('http://env-8638639.jelasticlw.com.br/restful/pedido/'.strtoupper($estado).'/buscarPedido/'.$numeroNota);
    	$itensNotaFiscal = json_decode($url,true);

    	if (is_null(Input::get('pagina'))) {
    		$pagina = 1;
    	}else{
    		$pagina = Input::get('pagina');
    	}
    	$itensPorPagina = 10;
    	$numeroPaginacao = ceil(count($itensNotaFiscal)/$itensPorPagina);

    	return view('notafiscal.lista',[
    		'itensNotaFiscal'=>$itensNotaFiscal,
    		'itensPorPagina'=>$itensPorPagina,
    		'numeroPaginacao'=>$numeroPaginacao
    	]);
    }
}
