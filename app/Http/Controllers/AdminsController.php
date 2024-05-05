<?php

namespace App\Http\Controllers;

use App\Models\titulo;
use App\Models\livrete;

use App\Models\taxista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminsController extends Controller
{
    public function index()
    {

        $response['titulos']=titulo::join('taxistas','taxistas.id','titulos.taxista_id')->join('livretes','livretes.id','titulos.livrete_id')->get();
        /*dd($response);*/
        return view('admin.titulo.index',$response);
               
    }

    public function create()
    {
        $taxistas=taxista::get();
        $livretes=livrete::get();
        return view('admin.titulo.criar.index',compact('taxistas'), compact('livretes'));

    }

    public function store(Request $request)
    {
       
        titulo::create($request->all());
        return redirect()->route('admin.titulos');
    }

    public function edit($id)
    { 
        $taxistas=taxista::all();
        $livretes=livrete::all();
        $titulos=titulo::where('id',$id)->first();
        if (!empty($titulos))
         {
         return view('admin.titulo.editar.index',compact('titulos','taxistas','livretes'));
        } 
        else
        {
            return redirect()->route('admin.titulos');
        }
    }

    public function update(Request $request, $id)
    {
        $data=[
        'taxista_id'=>$request->taxista_id,
        'livrete_id'=>$request->livrete_id,  
        'dataemissao'=>$request->dataemissao,
        'ndetitulo'=>$request->ndetitulo,
        ];

        titulo::where('id', $id)->update($data);
         return redirect()->route('admin.titulos');
    }

    public function destroy($id)
    {
        titulo::where('id', $id)->delete();
        return redirect()->route('admin.titulos');
    }
}
