<?php

namespace App\Http\Controllers\NotaFiscal;

use App\Http\Controllers\Controller;
use App\Model\NotaFiscal\NotaFiscal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

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

            $arquivo = NotaFiscal::where('numeroNota', $numeroNota)->first();

            if ($arquivo || !is_null($arquivo)) {
                return view('notafiscal.lista',[
                    'estado'=>$estado,
                    'itensNotaFiscal'=>$itensNotaFiscal,
                    'itensPorPagina'=>$itensPorPagina,
                    'totalItens'=>$totalItens,
                    'totalPaginas'=>$totalPaginas,
                    'arquivo'=>$arquivo
                ]);
            } else {
                return view('notafiscal.lista',[
                    'estado'=>$estado,
                    'itensNotaFiscal'=>$itensNotaFiscal,
                    'itensPorPagina'=>$itensPorPagina,
                    'totalItens'=>$totalItens,
                    'totalPaginas'=>$totalPaginas,
                ]);
            }
        }
    }

    public function salvaCanhotoPorNotaFiscal(Request $request)
    {
        $this->validate($request, [

            'arquivo' => 'required|mimes:jpeg,png,jpg,pdf|max:4096',
        ]);

        $arquivo = $request->file('arquivo');

        if(empty($arquivo)){
            abort(400,'Nenhum arquivo foi enviado.');
        }else{
            $numeroNota = $request['numeroNota'];
            $consultaNotaFiscal = NotaFiscal::where('numeroNota', $numeroNota)->first();

            if ($consultaNotaFiscal && !is_null($consultaNotaFiscal)) {
                return redirect()->back()->with('erro','O canhoto da nota '.$numeroNota.' já existe!');
            } else {
                $estado = $request['estado'];
                $extensaoArquivo = $arquivo->getClientOriginalExtension();
                $nomeArquivo = $numeroNota.".".$extensaoArquivo;
                $path = 'arquivos/'.$estado.'/';
                $pathCompletoReal = public_path().DIRECTORY_SEPARATOR.$path.$nomeArquivo;
                $pathCompleto = DIRECTORY_SEPARATOR.$path.$nomeArquivo;

                


                if(!File::exists($path)){
                    File::makeDirectory($path);
                }

                $arquivo->move($path,$nomeArquivo);

                $canhotoNotaFiscal = new NotaFiscal;
                $canhotoNotaFiscal->numeroNota = $request->numeroNota;
                $canhotoNotaFiscal->user_id = $request->user_id;
                $canhotoNotaFiscal->path = $pathCompleto;
                $canhotoNotaFiscal->extensao = $extensaoArquivo;
                $canhotoNotaFiscal->save();


                $data = array(
                    'numeroNota'=>$numeroNota,
                    'from'=>'ddmelo.dev@gmail.com',
                    'nameFrom'=>'dMelo dEv',
                    'to'=>Auth::user()->email,
                    'nameTo' => Auth::user()->name.' '.Auth::user()->last_name,
                    'subject'=>'Canhoto Aqui - NF: '.$numeroNota,
                    'attach'=>$pathCompletoReal,
                );

                Mail::send('email.email', $data, function ($message) use ($data) {
                    $message->from($data['from'], $data['nameFrom']);
                    $message->to($data['to'], $data['nameTo']);
                    $message->subject($data['subject']);
                    $message->attach($data['attach']);
                });


                return redirect()->back()->with('sucesso','Canhoto da nota '.$numeroNota.' adicionado com sucesso!');
            }
        }
    }
}
