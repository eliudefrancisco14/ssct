<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Fingerprint;
use App\Models\FingerTaxista;
use App\Models\taxista;
use Illuminate\Http\Request;

class FingerprintController extends Controller
{
    public function index()
    {
 
        return view('sensor.index');

        $fingerprints = Fingerprint::all();

        return response()->json(['fingerprints' => $fingerprints], 200);
    }

    public function store(Request $request)
    {
        //  $request->validate([
        //      'fingerprint_id' => 'required',
        //  ]);

        // $fingerprint = Fingerprint::create([
        //     'fingerprint_id' => $request->fingerprint_id,
        // ]);,
        Fingerprint::find(1)->delete();
        //    $fingerprint = Fingerprint::create([
        //         'fingerprint_id' =>2,
        //     ]);

        // return response()->json(['fingerprint' => $fingerprint, 'message' => 'Dados do sensor salvos com sucesso!'], 201);
    }
    public function codigo_cadastrar($id)
    {
        $taxista =  taxista::where('estado', 1)->first();

        if ($taxista) {
            // dd("o");
            taxista::where('estado', 1)->update(['codigo' => $id]);
            return response()->json(['message' => 'Impressão salva com sucesso!'], 201);
        } else {
            return response()->json([ 'message' => 'Nenhum táxista habilitado para leitura!'], 404);
        }  
    }
    public function reconhecer($id)
    {
        
        
        $fingerprint = taxista::where('codigo',$id)->first()->toArray();
        $taxista = taxista::where('codigo',$id)->first();
        
        if ($fingerprint) {
            $resposta = FingerTaxista::create([
                'id_taxista' => $taxista->id,
                'estado' => false,
            ]);

            return response()->json(['fingerprint' => $fingerprint, 'message' => 'Impressão reconhecida com sucesso!'], 200);
        } else {
            return response()->json(['fingerprint' => $fingerprint, 'message' => 'Impressao nao reconhecida!'], 201);
        }
    }
    public function show($id)
    {
        $fingerprint = Fingerprint::find($id);

        if (!$fingerprint) {
            return response()->json(['message' => 'Fingerprint não encontrado'], 404);
        }

        return response()->json(['fingerprint' => $fingerprint], 200);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'fingerprint_idcodigoFingerprint' => 'required',

        ]);

        $fingerprint = Fingerprint::find($id);

        if (!$fingerprint) {
            return response()->json(['message' => 'Fingerprint não encontrado'], 404);
        }


        $fingerprint->fingerprint_id = $request->fingerprint_id;

        $fingerprint->save();

        return response()->json(['message' => 'Dados do sensor atualizados com sucesso!'], 200);
    }

    public function destroy($id)
    {
        $fingerprint = Fingerprint::find($id);

        if (!$fingerprint) {
            return response()->json(['message' => 'Fingerprint não encontrado'], 404);
        }

        $fingerprint->delete();

        return response()->json(['message' => 'Fingerprint excluído com sucesso!'], 200);
    }
}
