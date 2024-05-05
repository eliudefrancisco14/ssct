<?php

namespace App\Http\Controllers;
use App\Models\taxista;
use Illuminate\Http\Request;

class DadospessoaisController extends Controller
{
    public function index(){
        return view('formulario.dadospessoais.index');
    }
}