<?php

namespace App\Http\Controllers;

use App\Classes\Logger;
use App\Models\livrete;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['users'] = User::get();
        $this->Logger->log('info', 'Listou os usuarios');
        return view('admin.user.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar usuario');
        return view('admin.user.criar.index');
    }

    public function store(Request $request)
    {

        // Validação
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'funcao' => 'required',
            'nbi' => 'required',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'funcao' => $request->input('funcao'),
            'nbi' => $request->input('nbi'),
        ]);
        $this->Logger->log('info', 'Cadastrou usuario');
        return redirect()->route('admin.users');
    }

    public function edit($id)
    {
        $user = user::where('id', $id)->first();
        if (!empty($user)) {
            $this->Logger->log('info', 'Entrou em editar usuario');
            return view('admin.user.editar.index', compact('user'));
        } else {
            return redirect()->route('admin.users');
        }
    }

    public function update(Request $request, $id)
    {
        // Validação
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'funcao' => 'required',
            'nbi' => 'required',
        ]);

        // Criação do usuário
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'funcao' => $request->input('funcao'),
            'nbi' => $request->input('nbi'),
        ]);
        $this->Logger->log('info', 'Editou usuario');
        return redirect()->route('admin.users');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        $this->Logger->log('info', 'Removeu usuario');
        return redirect()->route('admin.users');
    }
}
