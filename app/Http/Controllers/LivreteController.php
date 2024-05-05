<?php

namespace App\Http\Controllers;
use App\Models\livrete;
use App\Models\taxista;
use Illuminate\Http\Request;

class LivreteController extends Controller
{
    public function index(){
        $response['livretes']=livrete::join('taxistas', 'taxistas.id', 'livretes.taxista_id')->get();
        // dd( $response['formandos']);
        return view('admin.livrete.index',$response);
    }
    public function create(){
        $taxistas=taxista::all();
        return view('admin.livrete.criar.index',compact('taxistas'));
    }
    public function store(Request $request){
        
        livrete::create($request->all());
        return redirect()->route('admin.livretes');
    }
    public function edit($id){
        $taxistas=taxista::all();
        $livretes= livrete::where('id', $id)->first();
        if(!empty($livretes))
        {
            return view('admin.livrete.editar.index',['livretes'=>$livretes],compact('taxistas'));
        }
        else
        {
            return redirect()->route('admin.livretes');
        }
    }
    public function update(Request $request, $id){
        $data=[
            
            'taxista_id'=>$request->taxista_id,
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
         livrete::where('id', $id)->update($data);
         return redirect()->route('admin.livretes');
    }
    public function destroy($id){
        livrete::where('id', $id)->delete();
         return redirect()->route('admin.livretes');
    }  
}


