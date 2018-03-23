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
    	/*315333*/
    	$url = file_get_contents('http://env-8638639.jelasticlw.com.br/restful/pedido/'.strtoupper($estado).'/buscarPedido/'.$numeroNota);

    	$pagina = (!isset($_GET['pagina'])?1:$_GET['pagina']);
    	$itensPorPagina = 10;
    	$offset = ($pagina - 1)*$itensPorPagina;
	   	$totalItens = count(json_decode($url,true));
    	$totalPaginas = ceil($totalItens/$itensPorPagina);
    	$itensNotaFiscal = array_slice(json_decode($url,true), $offset, $itensPorPagina);

    	return view('notafiscal.lista',[
    		'itensNotaFiscal'=>$itensNotaFiscal,
    		'itensPorPagina'=>$itensPorPagina,
    		'totalItens'=>$totalItens,
    		'totalPaginas'=>$totalPaginas
    	]);
    }
}
