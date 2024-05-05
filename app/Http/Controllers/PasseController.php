<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\tabela;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class PasseController extends Controller
{

   
    public function forgot_password()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword()
    {
        return redirect('/forgot.email');
    }

    public function logout()
    {
        Auth::guest();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
