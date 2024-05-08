<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\Placa;
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
    public function destroy($id)
    {
        placa::find($id)->delete();
        $this->Logger->log('info', 'Removeu placa');
        return redirect()->route('admin.placas');
    }
}
