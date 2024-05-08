<?php


namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\livrete;
use App\Models\Log;
use App\Models\taxista;
use App\Models\titulo;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class TabelasController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['titulos'] = titulo::join('taxistas', 'taxistas.id', '=', 'titulos.taxista_id')
            ->join('livretes', 'livretes.id', '=', 'titulos.livrete_id')
            ->orderBy('titulos.id', 'asc')
            ->take(5)
            ->get();

        $response['totTaxistas'] = taxista::count();
        $response['totLivretes'] = livrete::count();
        $response['totTitulos'] = titulo::count();
        $response['totUsers'] = User::count();

        $this->Logger->log('info', 'Entrou em Painel Principal');
        return view('admin.index', $response);
    }
    public function log()
    {
        $response['logs'] = Log::orderByDesc('id')->get();
        $this->Logger->log('info', 'Listou os logs de atividades');
        return view('admin.logs.index', $response);
    }

    public function pdflog(Request $request)
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
            $logs = Log::whereBetween('created_at', [$request->start, $request->end])
                ->orderBy('id', 'desc')
                ->get();

            $response['logs'] = $logs;
            $response['start'] = $request->start;
            $response['end'] = $request->end;

            $this->Logger->log('info', 'Lista de logs de atividades');
            $pdf = PDF::loadview('admin.logs.pdf', $response);

            return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
        } else {
            return redirect()->back();
        }

    }
}
