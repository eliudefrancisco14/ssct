<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\livrete;
use App\Models\taxista;
use Illuminate\Http\Request;

class LivreteController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['livretes'] = livrete::join('taxistas', 'taxistas.id', 'livretes.taxista_id')->get();
        $this->Logger->log('info', 'Listou os livretes');
        // dd( $response['formandos']);
        return view('admin.livrete.index', $response);
    }
    public function create()
    {
        $taxistas = taxista::all();
        $this->Logger->log('info', 'Entrou em cadastrar Livretes');
        return view('admin.livrete.criar.index', compact('taxistas'));
    }
    public function store(Request $request)
    {

        livrete::create($request->all());
        $this->Logger->log('info', 'Cadastrou livrete');
        return redirect()->route('admin.livretes');
    }
    public function edit($id)
    {
        $taxistas = taxista::all();
        $livretes = livrete::where('id', $id)->first();
        if (!empty($livretes)) {
            $this->Logger->log('info', 'Entrou em editar livrete');
            return view('admin.livrete.editar.index', ['livretes' => $livretes], compact('taxistas'));
        } else {
            return redirect()->route('admin.livretes');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [

            'taxista_id' => $request->taxista_id,
            'matricula1' => $request->matricula1,
            'modelo1' => $request->modelo1,
            'marca1' => $request->marca1,
            'ndemotor1' => $request->ndemotor1,
            'cor1' => $request->cor1,
            'medidaspneus' => $request->medidaspneus,
            'pesobruto' => $request->pesobruto,
            'dentreixos' => $request->dentreixos,
            'servico' => $request->servico,
            'cilindrada' => $request->cilindrada,
            'ndequadro1' => $request->ndequadro1,
            'lotacao' => $request->lotacao,
            'tara' => $request->tara,
            'tipodecaixa' => $request->tipodecaixa,
            'combustivel' => $request->combustivel,
            'ndecilindros' => $request->ndecilindros,
            'dataregistro' => $request->dataregistro,

        ];
        livrete::where('id', $id)->update($data);
        $this->Logger->log('info', 'Editou livrete');
        return redirect()->route('admin.livretes');
    }
    public function destroy($id)
    {
        livrete::where('id', $id)->delete();
        $this->Logger->log('info', 'Removeu livrete');
        return redirect()->route('admin.livretes');
    }
}
