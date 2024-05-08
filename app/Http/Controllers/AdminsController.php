<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\titulo;
use App\Models\livrete;

use App\Models\taxista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {

        $response['titulos'] = titulo::join('taxistas', 'taxistas.id', 'titulos.taxista_id')->join('livretes', 'livretes.id', 'titulos.livrete_id')->get();
        /*dd($response);*/
        $this->Logger->log('info', 'Listou os titulos');
        return view('admin.titulo.index', $response);
    }

    public function create()
    {
        $taxistas = taxista::get();
        $livretes = livrete::get();
        $this->Logger->log('info', 'Entrou em cadastrar titulos');
        return view('admin.titulo.criar.index', compact('taxistas'), compact('livretes'));
    }

    public function store(Request $request)
    {

        titulo::create($request->all());
        $this->Logger->log('info', 'Cadastrou titulo');
        return redirect()->route('admin.titulos');
    }

    public function edit($id)
    {
        $taxistas = taxista::all();
        $livretes = livrete::all();
        $titulos = titulo::where('id', $id)->first();
        if (!empty($titulos)) {
            $this->Logger->log('info', 'Entrou em editar titulo');
            return view('admin.titulo.editar.index', compact('titulos', 'taxistas', 'livretes'));
        } else {
            return redirect()->route('admin.titulos');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'taxista_id' => $request->taxista_id,
            'livrete_id' => $request->livrete_id,
            'dataemissao' => $request->dataemissao,
            'ndetitulo' => $request->ndetitulo,
        ];

        titulo::where('id', $id)->update($data);
        $this->Logger->log('info', 'Editou titulo');
        return redirect()->route('admin.titulos');
    }

    public function destroy($id)
    {
        titulo::where('id', $id)->delete();
        $this->Logger->log('info', 'Removeu titulo');
        return redirect()->route('admin.titulos');
    }
}
