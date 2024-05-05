<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            if (Auth::user()->vc_tipo_usuario == 'Administrador') {
                return redirect()->route('dashboard');
            } else{
                return redirect()->route('admin.dashboard');
            }
        }

        // Autenticação falhou
        return redirect()->route('login')->with('error', 'Credenciais inválidas');
    }

    // Remova o método create do AuthController

    // Adicione este método para exibir o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Adicione este método para processar o registro
    public function register(Request $request)
    {
        
        // Validação
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'nbi' => 'required',
        ]);

        // Verifica se a validação falha
        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
        
        // Criação do usuário
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'nbi' => $request->input('nbi'),
            'funcao' => 'Operador',
        ]);

        // Autentica o usuário após o registro
        Auth::login($user);

        // Redireciona para a rota desejada após o registro
        return redirect()->route('admin.dashboard');
    }

    // Adicione este método para redirecionar após o registro
    protected function registered(Request $request, $user)
    {
        return view('login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'vc_tipo_usuario' => ['required'],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guest();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('welcome');
    }



    // ... Outros métodos gerados pelo Laravel ...
}
