<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\livrete;
use App\Models\taxista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $docLivrete = Storage::putFile('public/livretes', $request->documentos);
        $docNameLivrete = str_replace('public/livretes/', '', $docLivrete);
        $file = $docNameLivrete;

        $data = [

            'taxista_id' => $request->taxista_id,
            'matricula' => $request,
            'modelo' => $request,
            'ndemotor' => $request,
            'servico' => $request,
            'documentos' => $file,
            'proprietario' => $request->proprietario,

        ];
        $livrete = livrete::create($data);

        livrete::create($request->all());
        $this->Logger->log('info', 'Cadastrou livrete');
        return redirect()->route('admin.livretes');
    }
    public function edit($id)
    {
        $taxistas = taxista::all();
        $livretes = livrete::where('id', $id)->first();

        $this->Logger->log('info', 'Entrou em editar livrete');
        return view('admin.livrete.editar.index', ['livretes' => $livretes], compact('taxistas'));
    }
    public function update(Request $request, $id)
    {
        $data = [
            'taxista_id' => $request->taxista_id,
            'matricula' => $request->matricula,
            'modelo' =>$request-> modelo,
            'ndemotor' =>$request-> ndemotor,
            'servico' =>$request-> servico,
            'proprietario' => $request->proprietario,
        ];
        $livrete = livrete::find($id);
        if ($request->documentos) {
            Storage::disk('documentos')->delete($livrete->documentos);

            $documento = Storage::putFile('public/livretes', $request->documento);
            $documentoName = str_replace('public/livretes/', '', $documento);
            $data['documentos'] = $documentoName;
        }else{
            $data['documentos'] = $livrete->documentos;
        }

        $livrete->update($data);

        $this->Logger->log('info', 'Editou livrete');
        return redirect()->route('admin.livretes');
    }
    public function destroy($id)
    {
        livrete::where('id', $id)->delete();
        $this->Logger->log('info', 'Removeu livrete');
        return redirect()->route('admin.livretes');
    }

    public function livreteDoc($id)
    {

        $livrete = livrete::find($id);
        $path = public_path('storage/livretes/' . $livrete->documentos);
        //$path = asset('storage/'.$livrete->documentation);
        //dd($path);

        if (!file_exists($path)) {
            return redirect()->back()->with('not_found', '1');
        }
        return response()->file($path, ['Content-Type' => 'application/pdf']);
        // return response()->download($path);
    }
    public function exibir($id)
    {
        $response['livrete'] = livrete::where('id', $id)->first();
    

        $this->Logger->log('info', 'Entrou em Ver Detalhes do Taxista');
        return view('admin.livrete.exibir.index', $response);
    }
}


