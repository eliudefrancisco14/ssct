<?php

namespace App\Http\Controllers\Site;
use App\Models\taxista;
use App\Models\livrete;
use App\Models\titulo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxistaController extends Controller
{
    public function index(){
        return view('formulario.dadosviatura.index');
    }
    public function create()
{
    
    return view('formulario.dadosviatura.index');
}

public function store(Request $request)
{
    $data=[
        'nome'=>$request->nome,
        'ndebi'=>$request->ndebi,
        'genero'=>$request->genero,
        'data'=>$request->data,
        'numerotelefone'=>$request->numerotelefone,
        'documentos' => $request->documentos,
    ];
   $taxista=taxista::create($data);

    $data=[
         
        'taxista_id'=>$taxista->id,
        'matricula1'=>$request->matricula1,
        'modelo1'=>$request->modelo1,
        'marca1'=>$request->marca1,
       'ndemotor1'=>$request->ndemotor1,
       'cor1'=>$request->cor1,
       'medidaspneus'=>$request->medidaspneus,
       'pesobruto'=>$request->pesobruto,
       'dentreixos'=>$request->dentreixos,
       'servico'=>$request->servico,
        'cilindrada'=>$request->cilindrada,
       'ndequadro1'=>$request->ndequadro1,
       'lotacao'=>$request->lotacao,
        'tara'=>$request->tara,
        'tipodecaixa'=>$request->tipodecaixa,
        'combustivel'=>$request->combustivel,
        'ndecilindros'=>$request->ndecilindros,
        'dataregistro'=>$request->dataregistro,
        
    ];
    $livrete=livrete::create($data);


    $data=[
        'taxista_id'=>$taxista->id,
        'livrete_id'=>$livrete->id,  
        'dataemissao'=>$request->dataemissao,
        'ndetitulo'=>$request->ndetitulo,
        ];
   
        $titulo=titulo::create($data);
   
    // Crie uma nova instância de Taxista e Livrete
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
    $titulo->save();


    // Redirecione para a rota correta
    return redirect()->route(('admin.taxistas'),('admin.livretes'),('admin.titulos'));
}
}
