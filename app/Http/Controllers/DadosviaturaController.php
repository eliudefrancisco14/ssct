<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosviaturaController extends Controller
{
    public function index(){
        return view('formulario.dadosviatura.index');
    }
}
