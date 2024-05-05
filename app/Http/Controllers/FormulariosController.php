<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function cadastro(){
        return view('formulario.cadastro');
    }
    public function iniciar(){
        return view('formulario.iniciar');
    }
    public function pessoal(){
        return view('formulario.pessoal');
    }
}

