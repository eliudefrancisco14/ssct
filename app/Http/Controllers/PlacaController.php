<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\livrete;
use App\Models\Placa;
use App\Models\taxista;
use App\Models\titulo;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlacaController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['placas'] = Placa::get();
        $this->Logger->log('info', 'Listou as placas');
        return view('admin.placa.index', $response);
    }
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar placas');
        return view('admin.placa.criar.index');
    }
    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'presidente'=>'required',
            'bipresidente'=>'required',
            'numpresidente'=>'required',
            'nome' => 'required',
            'localizacao' => 'required',
            'descricao' => 'required|max:500',
        ], [
            'nome.required' => 'O campo Placa é obrigatório.',
            'localizacao.required' => 'O campo Localização é obrigatório.',
            'descricao.required' => 'O campo descricao é obrigatório.',
            'descricao.max' => 'O campo não pode exceder do 500 caractéres',
        ]);

        Placa::create($data);
        $this->Logger->log('info', 'Cadastrou placa');
        return redirect()->route('admin.placas');
    }
    public function edit($id)
    {
        $response['placa'] = placa::find($id);
        $this->Logger->log('info', 'Entrou em editar placa');
        return view('admin.placa.editar.index', $response);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nome' => 'required',
            'localizacao' => 'required',
            'descricao' => 'required|max:500',
        ], [
            'nome.required' => 'O campo Placa é obrigatório.',
            'localizacao.required' => 'O campo Localização é obrigatório.',
            'descricao.required' => 'O campo descricao é obrigatório.',
            'descricao.max' => 'O campo não pode exceder do 500 caractéres',
        ]);

        Placa::find($id)->update($data);
        $this->Logger->log('info', 'Editou placa');
        return redirect()->route('admin.placas');
    }
    public function entrar($id)
    { 
        $response['placa'] = placa::find($id);
        $response['taxistas'] = taxista::where('placa_id', $id)->get();

        // dd(  $response['taxistas']);
        return view('admin.placa.entrar.index', $response); // Ajuste conforme necessário
        
    }
    public function listar($id)
    {
        // $taxistas = taxista::where('placa_id', $id)->get();//
        
        $placas = Placa::with('taxistas')->get();
        $response['taxistas'] = taxista::where('placa_id', $id)->get();
      dd($response['taxistas']);
    
        return view('admin.placa.entrar.listar.index', compact('placas'),$response);
    }
    
    public function infor($id)
    {  
        $response['placa'] = Placa::where('id', $id)->first();

       $this->Logger->log('info', 'Entrou em Ver Detalhes da Placa');
        return view('admin.placa.entrar.infor.index', $response);
    }
    public function destroy($id)
    {
        placa::find($id)->delete();
        $this->Logger->log('info', 'Removeu placa');
        return redirect()->route('admin.placas');
    }
    public function placa(Request $request)
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
            $taxistas = Taxista::join('placas', 'placas.id', '=', 'taxistas.placa_id')
            ->select('placas.id as placa_id', DB::raw('count(taxistas.id) as taxistas_count'))
            ->groupBy('placas.id')
            ->get()
            ->whereBetween('created_at', [$request->start, $request->end])
            ->get();

            $response['taxistas'] = $taxistas;
            $response['start'] = $request->start;
            $response['end'] = $request->end;

            $this->Logger->log('info', 'Imprimiu lista de taxistas');

            $pdf = PDF::loadview('pdf.placa.index', $response);
            return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
        } else {
            return redirect()->back();
        }
    }

}
