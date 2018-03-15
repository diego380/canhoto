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
    	return view('notafiscal.lista',['itensNotaFiscal'=>$itensNotaFiscal]);
    }
}
