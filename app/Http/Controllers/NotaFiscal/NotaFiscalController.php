<?php

namespace App\Http\Controllers\NotaFiscal;

use App\Http\Controllers\Controller;
use App\Model\NotaFiscal\NotaFiscal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//TO DO: adicionar CNPJ e data de emissao no json

class NotaFiscalController extends Controller
{
    public function listaItensPorNotaFiscal()
    {
    	/*315333*/

        if (Input::get('estado') == null || Input::get('numeroNota') == null) {
            return redirect()->back()->with('erro','O campo ESTADO ou NOTA FISCAL está vazio!');
        } else{
            $estado = Input::get('estado');
            $numeroNota = Input::get('numeroNota');

            $url = file_get_contents('http://env-8638639.jelasticlw.com.br/restful/pedido/'.strtoupper($estado).'/buscarPedido/'.$numeroNota);

            $pagina = ((Input::get('pagina')==null)?1:Input::get('pagina'));
            $itensPorPagina = 15;
            $offset = ($pagina - 1)*$itensPorPagina;
            $totalItens = count(json_decode($url,true));
            $totalPaginas = ceil($totalItens/$itensPorPagina);
            $itensNotaFiscal = array_slice(json_decode($url,true), $offset, $itensPorPagina);

            return view('notafiscal.lista',[
                'estado'=>$estado,
                'itensNotaFiscal'=>$itensNotaFiscal,
                'itensPorPagina'=>$itensPorPagina,
                'totalItens'=>$totalItens,
                'totalPaginas'=>$totalPaginas
            ]);
        }
    }
}
