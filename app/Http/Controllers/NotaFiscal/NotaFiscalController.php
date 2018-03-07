<?php

namespace App\Http\Controllers\NotaFiscal;

use App\Http\Controllers\Controller;
use App\Model\NotaFiscal\NotaFiscal;
use Illuminate\Http\Request;

class NotaFiscalController extends Controller
{
    public function lista()
    {
    	$url = file_get_contents('http://env-8638639.jelasticlw.com.br/restful/pedido/ALAGOAS/buscarPedido/315333');
    	$notaFiscal = json_decode($url,true);
    	dd($notaFiscal);
    	//$notasFiscais = NotaFiscal::all();
    	//dd($notasFiscais);
    }

    //http://env-8638639.jelasticlw.com.br/restful/pedido/ALAGOAS/buscarPedido/315333
}
