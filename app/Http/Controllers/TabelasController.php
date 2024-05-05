<?php


namespace App\Http\Controllers;

use App\Models\livrete;
use App\Models\taxista;
use App\Models\titulo;
use App\Models\User;
use Illuminate\Http\Request;

class TabelasController extends Controller
{
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

        return view('admin.index', $response);
    }
}
