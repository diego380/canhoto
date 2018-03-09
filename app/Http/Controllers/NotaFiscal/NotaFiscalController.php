<?php

namespace App\Http\Controllers\NotaFiscal;

use App\Http\Controllers\Controller;
use App\Model\NotaFiscal\NotaFiscal;
use Illuminate\Http\Request;

//TO DO: adicionar CNPJ e data de emissao no json

class NotaFiscalController extends Controller
{
    public function lista()
    {
    	$url = file_get_contents('http://env-8638639.jelasticlw.com.br/restful/pedido/ALAGOAS/buscarPedido/315333');
    	$itensNotaFiscal = json_decode($url,true);
    	$qtdItens = count($itensNotaFiscal);
    	$cidade = ucwords(strtolower($itensNotaFiscal[0]['cidadeCliente']));
       	$dataPedido = date("d/m/Y",strtotime($itensNotaFiscal[0]['dataPedido']));
    	return view('notafiscal.lista',[
    		'itensNotaFiscal'=>$itensNotaFiscal,
    		'qtdItens'=>$qtdItens,
    		'cidade'=>$cidade,
    		'dataPedido'=>$dataPedido
    	]);

    }
}
