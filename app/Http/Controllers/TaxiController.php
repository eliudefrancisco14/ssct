<?php

namespace App\Http\Controllers;

use App\Models\taxista;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function index()
    {

        $response['taxistas'] = taxista::all();
        // dd( $response['formandos']);
        return view('admin.taxista.index', $response);
    }
    public function create()
    {
        return view('admin.taxista.criar.index');
    }
    public function store(Request $request)
    {
        /* $request->validate([
            'title' => 'required|string|max:255',
            'path' => 'required|mimes:pdf|max:5000',
        ], [
            'title' => 'Informar o título',
            'path' => 'Informar a imagem',
        ]);
        $file = $request->file('path')->store('regulation_image');
        try {
            $regulation = Regulation::create([
                'path' => $file,
                'title' => $request->title,
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        } */

        taxista::create($request->all());
        return redirect()->route('admin.taxistas');
    }
    public function edit($id)
    {
        $taxistas = taxista::where('id', $id)->first();
        if (!empty($taxistas)) {
            return view('admin.taxista.editar.index', ['taxistas' => $taxistas]);
        } else {
            return redirect()->route('admin.taxistas');
        }
    }
    public function update(Request $request, $id)
    {

        $data = [
            'nome' => $request->nome,
            'ndebi' => $request->ndebi,
            'genero' => $request->genero,
            'data' => $request->data,
            'numerotelefone' => $request->numerotelefone,

        ];
        taxista::where('id', $id)->update($data);
        return redirect()->route('admin.taxistas');
    }
    public function destroy($id)
    {
        taxista::where('id', $id)->delete();
        return redirect()->route('admin.taxistas');
    }

    public function taxista(Request $request)
    {

        $response['taxistas'] = taxista::get();

        $response['data_atual'] = $request->data_atual;
        $pdf = PDF::loadview('pdf.taxista.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }
}
