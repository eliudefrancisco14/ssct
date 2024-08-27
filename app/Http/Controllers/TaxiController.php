<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\Fingerprint;
use App\Models\FingerTaxista;
use App\Models\livrete;
use App\Models\Placa;
use App\Models\taxista;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaxiController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['placas'] = Placa::get();
        $response['taxistas'] = taxista::orderByDesc('id')->get();
        $this->Logger->log('info', 'Listou os taxistas');

        return view('admin.taxista.index', $response);
    }
    public function muda_estado($id, $estado)
    {
        taxista::where('estado', 1)->update(['estado' => 0]);

        $id = taxista::find($id)->update(['estado' => $estado]);

        return redirect()->back();
    }
    public function create()
    {
        $response['placas'] = Placa::get();
        $this->Logger->log('info', 'Entrou em cadastrar taxistas');
        return view('admin.taxista.criar.index', $response);
    }

    public function details($id)
    {
        $response['taxista'] = taxista::where('id', $id)->first();
        $response['livrete'] = livrete::where('taxista_id', $response['taxista']->id)->first();
        $response['placa'] = Placa::where('id', $response['taxista']->placa_id)->first();

        $this->Logger->log('info', 'Entrou em Ver Detalhes do Taxista');
        return view('admin.taxista.detalhes.index', $response);
    }
    public function vertaxista()
    {
        // Verifica se o dado da sessão existe
        $idTaxista = FingerTaxista::where('estado', false)->orderByDesc('id')->first();

         // $taxista = FingerTaxista::where('estado', false)->orderByDesc('id')->first();
        $primeiroTaxista = FingerTaxista::where('estado', false)->orderByDesc('id')->first();

            // Obtendo o próximo taxista com ID maior que o primeiro
            // $proximoTaxista = FingerTaxista::where('estado', false)
                // ->where('id', '<', $primeiroTaxista->id)
                // // ->orderByDesc('id')
                // ->first();

        if (isset( $primeiroTaxista)) {
            // Obtém o valor da sessão
            $idTaxista =  $primeiroTaxista->id_taxista;
            FingerTaxista::find( $primeiroTaxista->id)->update(['estado' => true]);

            // Retorna um JSON com os dados da sessão
            return response()->json(['idTaxista' => $idTaxista], 200);
        } else {
            // Se o dado da sessão não existir, retorna um erro 404
            return response()->json(['error' => 'Dado não encontrado'], 404);
        }
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'ndebi' => 'required',
            'genero' => 'required',
            'data' => 'required',
            'numerotelefone' => 'required',
            'documentos' => 'required|mimes:pdf',
            'placa_id' => 'required',

        ]);
        //$file = $request->file('documentos')->store('taxista');

        $doc = Storage::putFile('public/documentos', $request->documentos);
        $docName = str_replace('public/documentos/', '', $doc);
        $file = $docName;

        taxista::create([
            'nome' => $request->nome,
            'ndebi' => $request->ndebi,
            'genero' => $request->genero,
            'data' => $request->data,
            'numerotelefone' => $request->numerotelefone,
            'documentos' => $file,
            'placa_id' => $request->placa_id,
        ]);
        $this->Logger->log('info', 'Cadastrou taxista os taxistas');
        return redirect()->route('admin.taxistas');
    }
    public function edit($id)
    {

        $placas = Placa::get();
        $taxista = taxista::where('id', $id)->first();

        $this->Logger->log('info', 'Entrou em editar taxista');
        return view('admin.taxista.editar.index', ['taxista' => $taxista, 'placas' => $placas]);
    }
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'nome' => 'required',
            'ndebi' => 'required',
            'genero' => 'required',
            'data' => 'required',
            'numerotelefone' => 'required',
            'documentos' => 'mimes:pdf',
            'placa_id' => 'required',

        ]);

        // $file = $request->file('documentos')->store('taxista');
        $taxista = taxista::find($id);

        if ($request->documentos) {
            Storage::disk('documentos')->delete($taxista->documentos);

            $documento = Storage::putFile('public/documentos', $request->documentos);
            $documentoName = str_replace('public/documentos/', '', $documento);
            $data['documentos'] = $documentoName;
        } else {
            $data['documentos'] = $taxista->documentos;
        }

        taxista::find($id)->update($data);

        $this->Logger->log('info', 'Editou taxista');
        return redirect()->route('admin.taxistas');
    }
    public function destroy($id)
    {
        taxista::where('id', $id)->delete();
        $this->Logger->log('info', 'Removeu taxista');
        return redirect()->route('admin.taxistas');
    }

    public function taxista(Request $request)
    {

        $data = $request->validate([
            'start' => 'required|date',
            'end' => 'required|date',
        ], [
            'start.required' => 'O campo Data Início é obrigatório.',
            'start.date' => 'O campo Data Início deve ser data.',
            'end.required' => 'O campo Data Fim é obrigatório.',
            'end.date' => 'O campo Data Fim deve ser data.',
        ]);

        if ($request->start <= $request->end) {
            $taxistas = taxista::whereBetween('created_at', [$request->start, $request->end])
                ->orderBy('id', 'desc')
                ->get();

            $response['taxistas'] = $taxistas;
            $response['start'] = $request->start;
            $response['end'] = $request->end;

            $this->Logger->log('info', 'Imprimiu lista de taxistas');

            $pdf = PDF::loadview('pdf.taxista.index', $response);
            return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
        } else {
            return redirect()->back();
        }
    }

    public function taxistaDoc($id)
    {

        $taxista = taxista::find($id);
        $path = public_path('storage/documentos/' . $taxista->documentos);
        //$path = asset('storage/'.$taxista->documentation);
        //dd($path);

        if (!file_exists($path)) {
            return redirect()->back()->with('not_found', '1');
        }
        return response()->file($path, ['Content-Type' => 'application/pdf']);
        // return response()->download($path);
    }
   

    public function cartao(Request $request)
    {
        // Valida que o ID do taxista foi fornecido
        $data = $request->validate([
            'id' => 'required|exists:taxistas,id',
        ], [
            'id.required' => 'O campo ID do Taxista é obrigatório.',
            'id.exists' => 'O Taxista selecionado não existe.',
        ]);

        // Busca o taxista pelo ID fornecido
        $taxista = Taxista::find($data['id']);

        if ($taxista) {
            // Prepara os dados para a resposta
            $response['taxista'] = $taxista;

            // Registra no log
            $this->Logger->log('info', 'Imprimiu relatório do taxista ID: ' . $taxista->id);

            // Gera o PDF
            $pdf = PDF::loadview('pdf.cartao.index', $response);
            return $pdf->setPaper('a4', 'landscape')->stream('taxista_' . $taxista->id . '.pdf', ['Attachment' => 0]);
        } else {
            // Se o taxista não for encontrado, redireciona de volta
            return redirect()->back()->withErrors(['id' => 'Taxista não encontrado.']);
        }
    }
}