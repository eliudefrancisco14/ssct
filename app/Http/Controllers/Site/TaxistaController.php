<?php

namespace App\Http\Controllers\Site;

use App\Models\taxista;
use App\Models\livrete;
use App\Models\titulo;
use App\Http\Controllers\Controller;
use App\Models\Placa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaxistaController extends Controller
{
    public function index()
    {
        $response['placas'] = Placa::get();
        return view('formulario.dadosviatura.index', $response);
    }
    public function create()
    {

        return view('formulario.dadosviatura.index');
    }

    public function store(Request $request)
    {

        $doc = Storage::putFile('public/documentos', $request->documentostaxista);
        $docName = str_replace('public/documentos/', '', $doc);
        $file = $docName;

        $data = [
            'nome' => $request->nome,
            'ndebi' => $request->ndebi,
            'genero' => $request->genero,
            'data' => $request->data,
            'numerotelefone' => $request->numerotelefone,
            'documentos' => $file,
            'placa_id' => $request->placa_id,
        ];
        $taxista = taxista::create($data);

        $docLivrete = Storage::putFile('public/livretes', $request->documentoslivrete);
        $docNameLivrete = str_replace('public/livretes/', '', $docLivrete);
        $file = $docNameLivrete;

        $data = [

            'taxista_id' => $taxista->id,
            'matricula' => $request->matricula,
            'modelo' =>$request-> modelo,
            'ndemotor' =>$request-> ndemotor,
            'servico' =>$request-> servico,
            'documentos' => $file,
            'proprietario' => $request->proprietario,

        ];
        $livrete = livrete::create($data);


        $data = [
            'taxista_id' => $taxista->id,
            'livrete_id' => $livrete->id,
            'dataemissao' => $request->dataemissao,
            'ndetitulo' => $request->ndetitulo,
        ];

        $titulo = titulo::create($data);

        /* // Crie uma nova instância de Taxista e Livrete
        $taxista = new Taxista();
        $livrete = new Livrete();
        $titulo = new Titulo();

        // Preencha os dados do Taxista
        $taxista->fill($request->all());
        // Salve o Taxista
        $taxista->save();

        // Preencha os dados do Livrete
        $livrete->fill($request->all());
        // Salve o Livrete
        $livrete->save();

        $titulo->fill($request->all());
        // Salve o Livrete
        $titulo->save(); */


        // Redirecione para a rota correta
        
        return redirect()->back()->with('create', '1');

    }
}
